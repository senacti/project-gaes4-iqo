# En nombre_app/urls.py
from django.urls import path
from .views import registro_view

from .forms import RegistroForm


urlpatterns = [
    path('registro/', registro_view, name='registro'),
    # Otras URLs necesarias
]

