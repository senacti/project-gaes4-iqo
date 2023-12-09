from django.contrib import admin
from .models import CustomUser

@admin.register(CustomUser)
class CustomUserAdmin(admin.ModelAdmin):
    list_display = ('username', 'email', 'phone', 'date_joined', 'is_active', 'is_staff')
    search_fields = ('username', 'email')
    ordering = ('-date_joined',)  # Puedes cambiar el campo por el que quieras ordenar
    list_filter = ('is_active', 'is_staff')

