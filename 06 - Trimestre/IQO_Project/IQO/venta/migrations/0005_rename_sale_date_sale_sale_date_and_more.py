# Generated by Django 4.2.6 on 2023-11-22 21:56

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('venta', '0004_alter_product_product_quantity_warranty_sale'),
    ]

    operations = [
        migrations.RenameField(
            model_name='sale',
            old_name='sale_Date',
            new_name='sale_date',
        ),
        migrations.AlterField(
            model_name='warranty',
            name='warranty_time',
            field=models.TimeField(verbose_name='Tiempo_Garantía'),
        ),
    ]
