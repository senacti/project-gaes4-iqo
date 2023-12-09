# En registroUsuario/views.py
from django.shortcuts import render, redirect
from .forms import RegistroForm
from .models import CustomUser

def registro_view(request):
    if request.method == 'POST':
        form = RegistroForm(request.POST)
        if form.is_valid():
            # El formulario ya maneja la validación de contraseñas
            # No es necesario verificarlo aquí nuevamente
            # Crea un nuevo usuario utilizando el modelo CustomUser
            CustomUser.objects.create_user(
                username=form.cleaned_data['username'],
                second_name=form.cleaned_data['second_name'],
                second_last_name=form.cleaned_data['second_last_name'],
                password=form.cleaned_data['password'],
                email=form.cleaned_data['email'],
                phone=form.cleaned_data['phone'],
            )
            return redirect('login')

    else:
        form = RegistroForm()

    return render(request, 'registro.html', {'form': form})







