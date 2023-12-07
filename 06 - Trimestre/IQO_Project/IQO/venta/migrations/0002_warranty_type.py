# Generated by Django 4.2.6 on 2023-11-02 19:23

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('venta', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='warranty_type',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('warranty_type_name', models.CharField(max_length=50, verbose_name='Nombre_Tipo_Garantia')),
            ],
            options={
                'verbose_name': 'Tipo_Garantia',
                'verbose_name_plural': 'Tipo_Garantias',
                'db_table': 'tipogarantia',
                'ordering': ['id'],
            },
        ),
    ]
