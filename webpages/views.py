from django.views import generic
from webpages.forms import ContactForm
from django.http import HttpRequest, HttpResponseRedirect
from django.core.mail import send_mail
from django.conf import settings

import requests


class IndexView(generic.TemplateView):
  template_name = 'webpages/index.html'

class BiographyView(generic.TemplateView):
  template_name = 'webpages/biography.html'

class PortfolioView(generic.TemplateView):
  template_name = 'webpages/portfolio.html'

class ContactView(generic.edit.FormView):
  template_name = 'webpages/contact.html'
  form_class = ContactForm
  
  def form_valid(self, form):
    recaptcha_response = self.request.POST.get('g-recaptcha-response')
    data = {'secret' : settings.GOOGLE_RECAPTCHA_SECRET_KEY,
            'response' : recaptcha_response,
           }
    r = requests.post('https://www.google.com/recaptcha/api/siteverify', data=data)
    result = r.json()
    if result['success']:
      send_mail(form.cleaned_data['subject'],
                form.cleaned_data['message'],
                form.cleaned_data['email'],
                ['williamma64@gmail.com'],
                fail_silently=False)
      return HttpResponseRedirect('success')
    else:
      form.add_error(None, "The reCaptcha is incomplete")
      return self.render_to_response(
             self.get_context_data(request=self.request, form=form))

class ContactSuccessView(generic.TemplateView):
  template_name = 'webpages/contactsuccess.html'

