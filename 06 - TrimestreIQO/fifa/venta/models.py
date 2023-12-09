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


class Warranty(models.Model):
    warranty_description = models.TextField(max_length=50, verbose_name="Descripcion_Garantía")
    warranty_time = models.DateField(verbose_name="Tiempo_Garantía")
    warranty_type = models.ForeignKey(Warranty_Type, on_delete=models.CASCADE)
    
    def __str__(self):
        return self.warranty_description
    
    class Meta:
        verbose_name = "Garantia"
        verbose_name_plural = "Garantias"
        db_table = "garantia"
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
        
        
class Product(models.Model):
    product_name = models.CharField(max_length=50, verbose_name="Nombre_Producto")
    product_description = models.TextField(max_length=50, verbose_name="Descripcion_Producto")
    product_reference = models.CharField(max_length=50, verbose_name="Referencia_Producto")
    product_value = models.PositiveIntegerField(verbose_name="Valor_Producto")
    product_quantity = models.IntegerField(verbose_name="Cantidad_Producto")
    brand = models.ForeignKey(Brand, on_delete=models.CASCADE)
    
    def __str__(self):
        return self.product_name
    
    class Meta:
        verbose_name = "Producto"
        verbose_name_plural = "Productos"
        db_table = "producto"
        ordering = ['id']


class Sale(models.Model):
    sale_date = models.DateTimeField(verbose_name="Fecha_Venta")
    quantity = models.IntegerField(verbose_name="Cantidad")
    price = models.PositiveIntegerField(verbose_name="Precio")
    subtotal = models.PositiveIntegerField(verbose_name="Subtotal")
    vat = models.PositiveIntegerField(verbose_name="Iva")
    total = models.PositiveIntegerField(verbose_name="Total")
    # falta empleado por que es una tabla de usuarios 
    # falta pedidoclien tambien es una tabla que necesita de usuarios
    warranty = models.ForeignKey(Warranty, on_delete=models.CASCADE)
    product = models.ForeignKey(Product, on_delete=models.CASCADE)
    
    def __str__(self):
        return self.sale_date
    
    class Meta:
        verbose_name = "Venta"
        verbose_name_plural = "Ventas"
        db_table = "venta"
        ordering = ['id']
        
