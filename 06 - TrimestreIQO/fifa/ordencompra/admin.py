from django.contrib import admin

from . models import Status_News_Order, Supplier_Order_Status, Suppliers, Supplier_Order, Supplier_Order_News

@admin.register(Status_News_Order)
class status_news_orderAdmin(admin.ModelAdmin):
    list_display = ('status_news_order_name',)
    
@admin.register(Supplier_Order_Status)
class supplier_order_statusAdmin(admin.ModelAdmin):
    list_filter = ('supplier_order_status_name',)
    list_per_page = 2
    
@admin.register(Suppliers)
class supplier_orderAdmin(admin.ModelAdmin):
    list_display = ('supplier_name', 'supplier_address', 'supplier_email', 'supplier_nit', 'supplier_cellphone')
    list_editable = ('supplier_address', 'supplier_email', 'supplier_nit', 'supplier_cellphone')
    search_fields = ('supplier_name',)
    list_per_page = 2
    
@admin.register(Supplier_Order)
class supplier_orderAdmin(admin.ModelAdmin):
    list_display = ('date_order', 'product_quantity', 'deliver_date', 'address', 'supplier_order_status','suppliers','order_price')
    list_editable = ('order_price', 'product_quantity', 'supplier_order_status')
    list_filter = ('supplier_order_status',)
    search_fields = ('suppliers',)
    list_per_page = 2
    
@admin.register(Supplier_Order_News)
class supplier_order_newsAdmin(admin.ModelAdmin):
    list_display = ('date_new_order_supplier', 'status_news_order', 'supplier_order') #falta empleado y pedidoclien por que las tablas no se han creado
    list_filter = ('status_news_order',)
    search_fields = ('supplier_order',)
    list_per_page = 2
