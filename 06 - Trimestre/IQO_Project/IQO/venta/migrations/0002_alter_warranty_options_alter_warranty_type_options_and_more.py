# Generated by Django 4.2.7 on 2023-12-09 21:39

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('venta', '0001_initial'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='warranty',
            options={'ordering': ['id'], 'verbose_name': 'Garantía', 'verbose_name_plural': 'Garantías'},
        ),
        migrations.AlterModelOptions(
            name='warranty_type',
            options={'ordering': ['id'], 'verbose_name': 'Tipo Garantía', 'verbose_name_plural': 'Tipo Garantías'},
        ),
        migrations.AlterField(
            model_name='brand',
            name='name_brand',
            field=models.CharField(max_length=50, verbose_name='Nombre Marca'),
        ),
        migrations.AlterField(
            model_name='product',
            name='brand',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='venta.brand', verbose_name='Marca'),
        ),
        migrations.AlterField(
            model_name='product',
            name='product_description',
            field=models.TextField(max_length=50, verbose_name='Descripción Producto'),
        ),
        migrations.AlterField(
            model_name='product',
            name='product_name',
            field=models.CharField(max_length=50, verbose_name='Nombre Producto'),
        ),
        migrations.AlterField(
            model_name='product',
            name='product_quantity',
            field=models.IntegerField(verbose_name='Cantidad Producto'),
        ),
        migrations.AlterField(
            model_name='product',
            name='product_reference',
            field=models.CharField(max_length=50, verbose_name='Referencia Producto'),
        ),
        migrations.AlterField(
            model_name='product',
            name='product_value',
            field=models.PositiveIntegerField(verbose_name='Valor Producto'),
        ),
        migrations.AlterField(
            model_name='sale',
            name='product',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='venta.product', verbose_name='Producto'),
        ),
        migrations.AlterField(
            model_name='sale',
            name='sale_date',
            field=models.DateTimeField(verbose_name='Fecha Venta'),
        ),
        migrations.AlterField(
            model_name='sale',
            name='warranty',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='venta.warranty', verbose_name='Garantía'),
        ),
        migrations.AlterField(
            model_name='warranty',
            name='warranty_description',
            field=models.TextField(max_length=50, verbose_name='Descripción Garantía'),
        ),
        migrations.AlterField(
            model_name='warranty',
            name='warranty_time',
            field=models.DateField(verbose_name='Tiempo Garantía'),
        ),
        migrations.AlterField(
            model_name='warranty',
            name='warranty_type',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='venta.warranty_type', verbose_name='Tipo Garantía'),
        ),
        migrations.AlterField(
            model_name='warranty_type',
            name='warranty_type_name',
            field=models.CharField(max_length=50, verbose_name='Nombre Tipo Garantía'),
        ),
    ]