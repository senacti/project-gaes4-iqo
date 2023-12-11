# En registroUsuario/forms.py
from django import forms
from django.core.exceptions import ValidationError
from .models import CustomUser


class RegistroForm(forms.Form):
    username = forms.CharField(label='Usuario', max_length=100, required=True)
    second_name = forms.CharField(label='Segundo Nombre', max_length=100, required=True)
    last_name = forms.CharField(label='Primer Apellido', max_length=100, required=True)
    second_last_name = forms.CharField(label='Segundo Apellido', max_length=100, required=True)
    password = forms.CharField(label='Contraseña', widget=forms.PasswordInput, required=True)
    password2 = forms.CharField(label='Confirma Contraseña', widget=forms.PasswordInput, required=True)
    email = forms.EmailField(label='Correo Electrónico', required=True)
    phone = forms.CharField(label='Teléfono', min_length=10, max_length=10)

class RegistroForm(forms.ModelForm):
    class Meta:
        model = CustomUser
        fields = ['username', 'second_name', 'last_name','second_last_name', 'password', 'password2', 'email', 'phone']
        widgets = {
            'password': forms.PasswordInput(),
        }
        labels = {
            'username': 'Usuario',
            'second_name': 'Segundo nombre (Opcional)',
            'last_name': 'Primer Apellido',
            'second_last_name': 'Segundo apellido (Opcional)',
            'password': 'Contraseña',
            'password2': 'Confirmar contraseña',
            'email': 'Correo electrónico',
            'phone': 'Teléfono',
        }
        error_messages = {
            'password_mismatch': 'Las contraseñas no coinciden.',
        }
        
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields['second_name'].required = False
        self.fields['second_last_name'].required = False
        
    def clean(self):
        cleaned_data = super().clean()
        password = cleaned_data.get('password')
        password2 = cleaned_data.get('password2')

        if password and password2 and password != password2:
            raise ValidationError("Las contraseñas no coinciden.")

        return cleaned_data
        
