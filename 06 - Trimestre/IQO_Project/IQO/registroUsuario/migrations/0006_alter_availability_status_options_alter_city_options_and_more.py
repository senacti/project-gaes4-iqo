# Generated by Django 4.2.7 on 2023-12-10 03:02

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('registroUsuario', '0005_delete_estadodisponibilidad_delete_rol_and_more'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='availability_status',
            options={'ordering': ['id'], 'verbose_name': 'Estado Disponibilidad', 'verbose_name_plural': 'Estado Disponibilidades'},
        ),
        migrations.AlterModelOptions(
            name='city',
            options={'ordering': ['id'], 'verbose_name': 'Ciudad', 'verbose_name_plural': 'Ciudades'},
        ),
        migrations.AlterModelOptions(
            name='client',
            options={'ordering': ['id'], 'verbose_name': 'Cliente', 'verbose_name_plural': 'Clientes'},
        ),
        migrations.AlterModelOptions(
            name='client_type',
            options={'ordering': ['id'], 'verbose_name': 'Tipo Cliente', 'verbose_name_plural': 'Tipos Clientes'},
        ),
        migrations.AlterModelOptions(
            name='contact',
            options={'ordering': ['id'], 'verbose_name': 'Contacto', 'verbose_name_plural': 'Contactos'},
        ),
        migrations.AlterModelOptions(
            name='employee',
            options={'ordering': ['id'], 'verbose_name': 'Empleado', 'verbose_name_plural': 'Empleados'},
        ),
        migrations.AlterModelOptions(
            name='position',
            options={'ordering': ['id'], 'verbose_name': 'Cargo', 'verbose_name_plural': 'Cargos'},
        ),
        migrations.AlterModelOptions(
            name='position_specialty',
            options={'ordering': ['id'], 'verbose_name': 'Especialidad Cargo', 'verbose_name_plural': 'Especialidades Cargos'},
        ),
        migrations.AlterModelOptions(
            name='role',
            options={'ordering': ['id'], 'verbose_name': 'Rol', 'verbose_name_plural': 'Roles'},
        ),
        migrations.AlterModelOptions(
            name='time_work',
            options={'ordering': ['id'], 'verbose_name': 'Tiempo Trabajo', 'verbose_name_plural': 'Tiempos Trabajos'},
        ),
        migrations.AlterModelTable(
            name='availability_status',
            table='estadodisponibilidad',
        ),
        migrations.AlterModelTable(
            name='city',
            table='ciudad',
        ),
        migrations.AlterModelTable(
            name='client',
            table='cliente',
        ),
        migrations.AlterModelTable(
            name='client_type',
            table='tipocliente',
        ),
        migrations.AlterModelTable(
            name='contact',
            table='contacto',
        ),
        migrations.AlterModelTable(
            name='employee',
            table='empleado',
        ),
        migrations.AlterModelTable(
            name='position',
            table='cargo',
        ),
        migrations.AlterModelTable(
            name='position_specialty',
            table='especialidadcargo',
        ),
        migrations.AlterModelTable(
            name='role',
            table='rol',
        ),
        migrations.AlterModelTable(
            name='time_work',
            table='tiempotrabajo',
        ),
    ]
