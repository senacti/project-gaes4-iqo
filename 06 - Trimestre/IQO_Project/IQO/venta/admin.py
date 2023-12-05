from django.contrib import admin


from . models import Warranty_Type, Warranty, Brand, Product, Sale

#admin.site.register(Warranty_Type)
#admin.site.register(Warranty)
#admin.site.register(Brand)
#admin.site.register(Product)
#admin.site.register(Sale)

@admin.register(Warranty_Type)
class warranty_typeAdmin(admin.ModelAdmin):
    list_display = ('warranty_type_name',)
    
@admin.register(Warranty)
class warrantyAdmin(admin.ModelAdmin):
    list_display = ('warranty_description', 'warranty_time', 'warranty_type',)
    list_filter = ('warranty_type',)
    list_per_page = 2
    
@admin.register(Brand)
class brandAdmin(admin.ModelAdmin):
    list_display = ('name_brand',)
    list_per_page = 2
    
@admin.register(Product)
class productAdmin(admin.ModelAdmin):
    list_display = ('product_name', 'product_description', 'product_reference', 'product_value', 'product_quantity', 'brand',)
    list_editable = ('product_value', 'product_quantity',)
    search_fields = ('product_name',)
    list_per_page = 2
    
@admin.register(Sale)
class saleAdmin(admin.ModelAdmin):
    list_display = ('sale_date', 'quantity', 'price', 'subtotal', 'vat', 'total', 'warranty', 'product',) #falta empleado y pedidoclien por que las tablas no se han creado
    list_editable = ('price',)
    list_per_page = 2