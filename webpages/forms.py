from django import forms

class ContactForm(forms.Form):

  success = ""
  name    = forms.CharField(label='Your name')
  email   = forms.CharField(label='Your email')
  subject = forms.CharField(label='Subject', 
                            max_length=64)
  message = forms.CharField(widget=forms.Textarea,
                            label='Message',
                            max_length=1000)
  
  name.widget.attrs.update({'class' : 'form-control', 'id' : 'name'})
  email.widget.attrs.update({'class' : 'form-control', 'id' : 'email'})
  subject.widget.attrs.update({'class' : 'form-control', 'id' : 'subject'})
  message.widget.attrs.update({'class' : 'form-control md-textarea',
                               'rows'  : '1',
                               'id'    : 'message'})
