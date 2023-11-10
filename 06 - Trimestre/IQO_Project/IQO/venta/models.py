from django.db import models


class Brand(models.Model):
    name_brand = models.CharField(max_length=50, verbose_name="Nombre_Marca")
    
    def __str__(self):
        return self.name_brand
    
    class Meta:
        verbose_name = "Marca"
        verbose_name_plural = "Marcas"
        db_table = "marca"
        ordering = ['id']
        

class Product(models.Model):
    product_name = models.CharField(max_length=50, verbose_name="Nombre_Producto")
    product_description = models.TextField(max_length=50, verbose_name="Descripcion_Producto")
    product_reference = models.CharField(max_length=50, verbose_name="Referencia_Producto")
    product_value = models.PositiveIntegerField(verbose_name="Valor_Producto")
    product_quantity = models.IntegerField(verbose_name="Cantida_Producto")
    brand = models.ForeignKey(Brand, on_delete=models.CASCADE)
    
    def __str__(self):
        return self.product_name
    
    class Meta:
        verbose_name = "Producto"
        verbose_name_plural = "Productos"
        db_table = "producto"
        ordering = ['id']

class Warranty_Type(models.Model):
    warranty_type_name = models.CharField(max_length=50, verbose_name="Nombre_Tipo_Garantia")
    
    def __str__(self):
        return self.warranty_type_name
    
    class Meta:
        verbose_name = "Tipo_Garantia"
        verbose_name_plural = "Tipo_Garantias"
        db_table = "tipogarantia"
        ordering = ['id']


