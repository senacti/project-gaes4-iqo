# Generated by Django 4.2.7 on 2023-12-11 02:34

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('registroUsuario', '0007_alter_availability_status_table_alter_city_table_and_more'),
        ('venta', '0005_alter_sale_subtotal_alter_sale_total_alter_sale_vat'),
    ]

    operations = [
        migrations.AddField(
            model_name='customer_order',
            name='employee',
            field=models.ForeignKey(null=True, on_delete=django.db.models.deletion.CASCADE, to='registroUsuario.employee', verbose_name='Empleado'),
        ),
    ]
