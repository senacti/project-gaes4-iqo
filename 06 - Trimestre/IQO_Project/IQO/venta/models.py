from django.db import models

class Warranty_Type(models.Model):
    warranty_type_name = models.CharField(max_length=50, verbose_name="Nombre_Tipo_Garantia")
    
    def __str__(self):
        return self.warranty_type_name
    
    class Meta:
        verbose_name = "Tipo_Garantia"
        verbose_name_plural = "Tipo_Garantias"
        db_table = "tipogarantia"
        ordering = ['id']


class Brand(models.Model):
    name_brand = models.CharField(max_length=50, verbose_name="Nombre_Marca")
    
    def __str__(self):
        return self.name_brand
    
    class Meta:
        verbose_name = "Marca"
        verbose_name_plural = "Marcas"
        db_table = "marca"
        ordering = ['id']
