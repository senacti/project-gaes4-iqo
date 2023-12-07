from django.db import models
from venta.models import Product

class Status_News_Order(models.Model):
    status_news_order_name = models.CharField(max_length=50, verbose_name="Nombre_Estado_Novedades_Pedido")
    
    def __str__(self):
        return self.status_news_order_name
    
    class Meta:
        verbose_name = "Estado_Novedad_Pedido"
        verbose_name_plural = "Estado_Novedades_Pedidos"
        db_table = "estnovedadespedidoprov"
        ordering = ['id']

        
class Supplier_Order_Status(models.Model):
    supplier_order_status_name = models.CharField(verbose_name="Nombre_Estado_Pedido_Proveedor", max_length=255)
    
    def __str__(self):
        return self.supplier_order_status_name
    
    class Meta:
        verbose_name = "Estado_Pedido_Proveedor"
        verbose_name_plural = "Estado_Pedidos_Proveedores"
        db_table = "estadopedidoprov"
        ordering = ['id']
        
class Suppliers(models.Model):
    supplier_name = models.CharField(max_length=50, verbose_name="Nombre_Proveedor")
    supplier_address = models.CharField(max_length=255, verbose_name="Direccion_Proveedor")
    supplier_email = models.CharField(max_length=255, verbose_name="Email_Proveedor")
    supplier_nit = models.CharField(max_length=20, verbose_name="Nit_Proveedor")
    supplier_cellphone = models.CharField(max_length=15, blank=True, null=True)
    
    def __str__(self):
        return self.supplier_name
    
    class Meta:
        verbose_name = "Proveedor"
        verbose_name_plural = "Proveedores"
        db_table = "proveedores"
        ordering = ['id']


        
class Supplier_Order(models.Model):
    date_order = models.DateField(verbose_name="Fecha_Pedido")
    product_quantity = models.IntegerField(verbose_name="Cantidad_Producto")
    order_price = models.PositiveIntegerField(verbose_name ="Precio_Pedido")
    deliver_date = models.DateField(verbose_name="Fecha_Entrega")
    address = models.CharField(verbose_name="Direccion", max_length=255)
    supplier_order_status = models.ForeignKey(Supplier_Order_Status, on_delete=models.CASCADE)
    #Empleado necesita tabla usuarios
    product = models.ForeignKey(Product, on_delete=models.CASCADE, default=None)
    suppliers = models.ForeignKey(Suppliers, on_delete=models.CASCADE)
    
    def __str__(self):
        return self.supplier_name
    
    class Meta:
        verbose_name = "Pedido_Proveedor"
        verbose_name_plural = "Pedido_Proveedores"
        db_table = "pedido_proveedores"
        ordering = ['id']
        
class Supplier_Order_News(models.Model):
    date_new_order_supplier = models.DateTimeField(verbose_name="Nombre_Proveedor")
    status_news_order = models.ForeignKey(Status_News_Order, on_delete = models.CASCADE)
    #empleado necesita usuarios
    supplier_order = models.ForeignKey(Supplier_Order, on_delete=models.CASCADE)
    
    def __str__(self):
        return self.supplier_name
    
    class Meta:
        verbose_name = "Novedades_Pedido_Proveedor"
        verbose_name_plural = "Novedades_Pedido_Proveedores"
        db_table = "novedadespedidoproveedor"
        ordering = ['id']