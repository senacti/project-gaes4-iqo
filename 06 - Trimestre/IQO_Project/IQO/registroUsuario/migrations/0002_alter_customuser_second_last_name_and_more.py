# Generated by Django 4.2.7 on 2023-12-09 20:07

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('registroUsuario', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='customuser',
            name='second_last_name',
            field=models.CharField(blank=True, max_length=100, null=True),
        ),
        migrations.AlterField(
            model_name='customuser',
            name='second_name',
            field=models.CharField(blank=True, max_length=100, null=True),
        ),
    ]