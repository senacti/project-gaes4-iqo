from django.db import models
from venta.models import Product

class Flow_Type(models.Model):
    flow_type_name =  models.CharField(max_length=50, verbose_name="Nombre_Tipo_Flujo")
    
    def __str__(self):
        return self.flow_typy_name
    
    class Meta:
        verbose_name = "Tipo_Flujo"
        verbose_name_plural = "Tipos_Flujos"
        db_table = "tipoflujo"
        ordering = ['id']
      
class Inventory_Flow (models.Model):
    flow_type = models.ForeignKey(Flow_Type, on_delete=models.CASCADE)
    product = models.ForeignKey(Product, on_delete= models.CASCADE)
    def __str__(self):
        return self.flow_type
    class Meta:
        verbose_name = "Flujo_Inventario"
        verbose_name_plural = "Flujos_Inventarios"
        db_table = "flujoinventario"
        ordering = ['id']
  
class Category (models.Model):
    category_name = models.CharField(max_length=50, verbose_name="Nombre_Categoria")
    description_category=models.CharField(max_length=50, verbose_name="Descripcion_Categoria")
    product = models.ForeignKey(Product, on_delete= models.CASCADE)
    
    def __str__(self):
        return self.flow_type
    
    class Meta:
        verbose_name = "Categoria"
        verbose_name_plural = "Categorias"
        db_table = "categoria"
        ordering = ['id']    
    
    
        