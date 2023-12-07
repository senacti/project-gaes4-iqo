from django.db import models

class Service_Status(models.Model):
    service_state_name = models.CharField(max_length=50, verbose_name="Nombre_Estado_Servicio")
    
    def __str__(self):
        return self.service_state_name
    
    class Meta:
        verbose_name = "Estado_Servicio"
        verbose_name_plural = "Estado_Servicios"
        db_table = "estadoservicio"
        ordering = ['id']


class Service_Type(models.Model):
    service_type_name = models.CharField(max_length=50, verbose_name="Nombre_Tipo_Servicio")
    
    def __str__(self):
        return self.service_type_name
    
    class Meta:
        verbose_name = "Tipo_Servicio"
        verbose_name_plural = "Tipo_Servicios"
        db_table = "tiposervicio"
        ordering = ['id']
        

class Service(models.Model):
    service_description = models.TextField(max_length=50, verbose_name="Descripcion_Servicio")
    service_price = models.PositiveIntegerField(verbose_name="Precio_Servicio")
    service_type = models.ForeignKey(Service_Type, on_delete=models.CASCADE)
    service_status = models.ForeignKey(Service_Status, on_delete=models.CASCADE)
    # falta foranea cliente es una tabla que necesita de usuarios
    
    def __str__(self):
        return self.service_description
    
    class Meta:
        verbose_name = "Servicio"
        verbose_name_plural = "Servicios"
        db_table = "servicio"
        ordering = ['id']
        
        
class Scheduling(models.Model):
    scheduling_description = models.TextField(max_length=50, verbose_name="Descripcion_Agendamiento")
    scheduling_time = models.TimeField(verbose_name="Hora_Agendamiento")
    scheduling_date = models.DateField(verbose_name="Fecha_Agendamiento")
    # falta foranea estado disponibilidad por que es una tabla que necesita de usuarios
    # falta foranea empleado por que es una tabla que necesita de usuarios
    service = models.ForeignKey(Service, on_delete=models.CASCADE)
    
    def __str__(self):
        return self.scheduling_description
    
    class Meta:
        verbose_name = "Agendamiento"
        verbose_name_plural = "Agendamientos"
        db_table = "agendamiento"
        ordering = ['id']