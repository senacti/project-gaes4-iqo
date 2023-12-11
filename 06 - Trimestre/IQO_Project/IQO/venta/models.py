from django.db import models
from registroUsuario.models import Availability_Status, Employee, Client

from servicioTecnico.models import Scheduling

class Warranty_Type(models.Model):
    warranty_type_name = models.CharField(max_length=50, verbose_name="Nombre Tipo Garantía")
    
    def __str__(self):
        return self.warranty_type_name
    
    class Meta:
        verbose_name = "Tipo Garantía"
        verbose_name_plural = "Tipo Garantías"
        db_table = "tipogarantia"
        ordering = ['id']


class Warranty(models.Model):
    warranty_description = models.TextField(max_length=50, verbose_name="Descripción Garantía")
    warranty_time = models.DateField(verbose_name="Tiempo Garantía")
    warranty_type = models.ForeignKey(Warranty_Type, on_delete=models.CASCADE, verbose_name="Tipo Garantía")

    def __str__(self):
        return f"{self.warranty_type} - {self.warranty_time}"
    
    class Meta:
        verbose_name = "Garantía"
        verbose_name_plural = "Garantías"
        db_table = "garantia"
        ordering = ['id']
        
        
class Brand(models.Model):
    name_brand = models.CharField(max_length=50, verbose_name="Nombre Marca")

    def __str__(self):
        return self.name_brand
    
    class Meta:
        verbose_name = "Marca"
        verbose_name_plural = "Marcas"
        db_table = "marca"
        ordering = ['id']
        
class Category (models.Model):
    category_name = models.CharField(max_length=50, verbose_name="Nombre Categoría")
    description_category=models.CharField(max_length=50, verbose_name="Descripción Categoría")


    def __str__(self):
        return self.category_name
    
    class Meta:
        verbose_name = "Categoría"
        verbose_name_plural = "Categorías"
        db_table = "categoria"
        ordering = ['id']   
        
        
class Product(models.Model):
    product_name = models.CharField(max_length=50, verbose_name="Nombre Producto")
    product_description = models.TextField(max_length=50, verbose_name="Descripción Producto")
    product_reference = models.CharField(max_length=50, verbose_name="Referencia Producto")
    product_value = models.PositiveIntegerField(verbose_name="Valor Producto")
    product_quantity = models.IntegerField(verbose_name="Cantidad Producto")
    category = models.ForeignKey(Category, on_delete=models.CASCADE, verbose_name="Categoria", null=True)
    brand = models.ForeignKey(Brand, on_delete=models.CASCADE, verbose_name="Marca")

    def __str__(self):
        return self.product_name
    
    class Meta:
        verbose_name = "Producto"
        verbose_name_plural = "Productos"
        db_table = "producto"
        ordering = ['id']

class Customer_Order_Status(models.Model):
    state_requested = models.CharField(max_length=50,verbose_name="Estado Pedido")
    description_state_requested = models.CharField(max_length=50,verbose_name="Descripción Estado Pedido")

    def __str__(self):
        return self.state_requested
    
    class Meta:
        verbose_name = "Estado Pedido"
        verbose_name_plural = "Estados Pedidos"
        db_table = "estadopedido"
        ordering = ['id']
        
class Customer_Order(models.Model):
    date_order = models.DateTimeField(verbose_name="Fecha Venta")
    order_quantity = models.IntegerField(verbose_name="Cantidad")
    customer_order_status = models.ForeignKey(Customer_Order_Status, on_delete=models.CASCADE, verbose_name="Estado Pedido Cliente")
    client = models.ForeignKey(Client, on_delete=models.CASCADE, verbose_name="Cliente")
    product = models.ForeignKey(Product, on_delete=models.CASCADE, verbose_name="Producto")
    scheduling = models.ForeignKey(Scheduling, on_delete=models.CASCADE, verbose_name="Agendamiento")
    employee = models.ForeignKey(Employee, on_delete=models.CASCADE, verbose_name="Empleado", null= True)
    
    def __str__(self):
        return f"{self.date_order} - {self.client} - {self.product}"
    
    class Meta:
        verbose_name = "Pedido Cliente"
        verbose_name_plural = "Pedidos Cliente"
        db_table = "pedidocliente"
        ordering = ['id']
        

class Sale(models.Model):
    sale_date = models.DateTimeField(verbose_name="Fecha Venta")
    quantity = models.IntegerField(verbose_name="Cantidad")
    price = models.PositiveIntegerField(verbose_name="Precio")
    subtotal = models.PositiveIntegerField(verbose_name="Subtotal")
    vat = models.PositiveIntegerField(verbose_name="Iva")
    total = models.PositiveIntegerField(verbose_name="Total")
    employee = models.ForeignKey(Employee, on_delete=models.CASCADE, verbose_name="Empleado", null=True)
    custom_order = models.ForeignKey(Customer_Order, on_delete=models.CASCADE, verbose_name="Pedido Cliente", null=True)
    warranty = models.ForeignKey(Warranty, on_delete=models.CASCADE, verbose_name="Garantía")
    product = models.ForeignKey(Product, on_delete=models.CASCADE, verbose_name="Producto")

    def __str__(self):
        return f"{self.sale_date} - {self.custom_order} - {self.product}"
    
    class Meta:
        verbose_name = "Venta"
        verbose_name_plural = "Ventas"
        db_table = "venta"
        ordering = ['id']
        
