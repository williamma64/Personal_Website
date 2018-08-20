from django.shortcuts import render
from django.views import generic

class IndexView(generic.TemplateView):
  template_name = 'webpages/index.html'

class BiographyView(generic.TemplateView):
  template_name = 'webpages/biography.html'

class PortfolioView(generic.TemplateView):
  template_name = 'webpages/portfolio.html'

class ContactView(generic.TemplateView):
  template_name = 'webpages/contact.html'


