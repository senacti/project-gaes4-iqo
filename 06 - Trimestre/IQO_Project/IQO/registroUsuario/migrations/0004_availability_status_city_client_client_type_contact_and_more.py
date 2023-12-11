# Generated by Django 4.2.7 on 2023-12-10 02:33

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('ordencompra', '0004_remove_supplier_order_especialidad_cargo_and_more'),
        ('registroUsuario', '0003_cargo_ciudad_especialidadcargo_estadodisponibilidad_and_more'),
    ]

    operations = [
        migrations.CreateModel(
            name='Availability_Status',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('availability_type', models.CharField(max_length=100, verbose_name='Tipo Disponibilidad')),
                ('description_type_availability', models.TextField(max_length=100, verbose_name='Descripción Tipo Disponibilidad')),
            ],
        ),
        migrations.CreateModel(
            name='City',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('city_name', models.CharField(max_length=100, verbose_name='Nombre Ciudad')),
            ],
        ),
        migrations.CreateModel(
            name='Client',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
            ],
        ),
        migrations.CreateModel(
            name='Client_Type',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('client_type_name', models.CharField(max_length=100, verbose_name='Nombre Tipo Cliente')),
                ('client_type_description', models.TextField(max_length=100, verbose_name='Descripción Tipo Cliente')),
            ],
        ),
        migrations.CreateModel(
            name='Contact',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('address', models.CharField(max_length=255, verbose_name='Dirección')),
            ],
        ),
        migrations.CreateModel(
            name='Employee',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
            ],
        ),
        migrations.CreateModel(
            name='Position',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name_position', models.CharField(max_length=100, verbose_name='Nombre Cargo')),
                ('position_description', models.TextField(max_length=100, verbose_name='Descripción Cargo')),
            ],
        ),
        migrations.CreateModel(
            name='Position_Specialty',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name_specialty_position', models.CharField(max_length=100, null=True, verbose_name='Nombre Especialidad Cargo')),
                ('description_specialty_position', models.TextField(max_length=100, verbose_name='Descripción Especialidad Cargo')),
            ],
        ),
        migrations.CreateModel(
            name='Role',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name_role', models.CharField(max_length=100, verbose_name='Nombre Rol')),
                ('role_description', models.TextField(max_length=100, verbose_name='Rol Descripción')),
            ],
        ),
        migrations.CreateModel(
            name='Time_Work',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('work_time_type', models.CharField(max_length=100, verbose_name='Tipo Tiempo Trabajo')),
                ('work_time_description', models.TextField(max_length=100, verbose_name='Descripción Tiempo Trabajo')),
            ],
        ),
        migrations.RemoveField(
            model_name='cliente',
            name='tipo_cliente',
        ),
        migrations.RemoveField(
            model_name='cliente',
            name='usuario',
        ),
        migrations.RemoveField(
            model_name='contacto',
            name='ciudad',
        ),
        migrations.RemoveField(
            model_name='empleado',
            name='cargo',
        ),
        migrations.RemoveField(
            model_name='empleado',
            name='estado_disponibilidad',
        ),
        migrations.RemoveField(
            model_name='empleado',
            name='tiempo_trabajo',
        ),
        migrations.RemoveField(
            model_name='empleado',
            name='usuario',
        ),
        migrations.RenameField(
            model_name='customuser',
            old_name='fecha_nacimiento',
            new_name='birth_date',
        ),
        migrations.RenameField(
            model_name='customuser',
            old_name='tipo_identificacion',
            new_name='identification_type',
        ),
        migrations.RemoveField(
            model_name='customuser',
            name='contacto',
        ),
        migrations.RemoveField(
            model_name='customuser',
            name='roles',
        ),
        migrations.DeleteModel(
            name='Cargo',
        ),
        migrations.DeleteModel(
            name='Ciudad',
        ),
        migrations.DeleteModel(
            name='Cliente',
        ),
        migrations.DeleteModel(
            name='Contacto',
        ),
        migrations.DeleteModel(
            name='Empleado',
        ),
        migrations.DeleteModel(
            name='EspecialidadCargo',
        ),
    ]
