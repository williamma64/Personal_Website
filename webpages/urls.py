from django.urls import path
from . import views

urlpatterns = [
  path('', views.IndexView.as_view(), name='index'),
  path('biography', views.BiographyView.as_view(), name='biography'),
  path('portfolio', views.PortfolioView.as_view(), name='portfolio'),
  path('contact', views.ContactView.as_view(), name='contact')
]
