# Generated by Django 4.2.7 on 2023-12-09 03:09

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Brand',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name_brand', models.CharField(max_length=50, verbose_name='Nombre_Marca')),
            ],
            options={
                'verbose_name': 'Marca',
                'verbose_name_plural': 'Marcas',
                'db_table': 'marca',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Product',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('product_name', models.CharField(max_length=50, verbose_name='Nombre_Producto')),
                ('product_description', models.TextField(max_length=50, verbose_name='Descripcion_Producto')),
                ('product_reference', models.CharField(max_length=50, verbose_name='Referencia_Producto')),
                ('product_value', models.PositiveIntegerField(verbose_name='Valor_Producto')),
                ('product_quantity', models.IntegerField(verbose_name='Cantidad_Producto')),
                ('brand', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='venta.brand')),
            ],
            options={
                'verbose_name': 'Producto',
                'verbose_name_plural': 'Productos',
                'db_table': 'producto',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Warranty_Type',
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
        migrations.CreateModel(
            name='Warranty',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('warranty_description', models.TextField(max_length=50, verbose_name='Descripcion_Garantía')),
                ('warranty_time', models.DateField(verbose_name='Tiempo_Garantía')),
                ('warranty_type', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='venta.warranty_type')),
            ],
            options={
                'verbose_name': 'Garantia',
                'verbose_name_plural': 'Garantias',
                'db_table': 'garantia',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Sale',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('sale_date', models.DateTimeField(verbose_name='Fecha_Venta')),
                ('quantity', models.IntegerField(verbose_name='Cantidad')),
                ('price', models.PositiveIntegerField(verbose_name='Precio')),
                ('subtotal', models.PositiveIntegerField(verbose_name='Subtotal')),
                ('vat', models.PositiveIntegerField(verbose_name='Iva')),
                ('total', models.PositiveIntegerField(verbose_name='Total')),
                ('product', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='venta.product')),
                ('warranty', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='venta.warranty')),
            ],
            options={
                'verbose_name': 'Venta',
                'verbose_name_plural': 'Ventas',
                'db_table': 'venta',
                'ordering': ['id'],
            },
        ),
    ]
