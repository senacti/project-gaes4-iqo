from django.contrib import admin
from . models import Warranty_Type, Warranty, Brand, Product, Sale, Customer_Order, Customer_Order_Status,Category
from import_export import resources
from import_export.admin import ImportExportModelAdmin
from reportlab.pdfgen import canvas
from reportlab.lib.pagesizes import letter
from reportlab.platypus import Table,TableStyle
from reportlab.lib import colors
from django.http import HttpResponse

def download_pdf(self,request,queryset):
    model_name = self.model.__name__
    response = HttpResponse(content_type='application/pdf')
    response['Content-Disposition'] = f'attachment;filename={model_name}.pdf'

    pdf = canvas.Canvas(response, pagesize=letter)
    pdf.setTitle('PDF Reporte')

    ordered_queryset = queryset.order_by('id')
    headers = [field.verbose_name for field in self.model._meta.fields]
    data = [headers]
    for obj in queryset:
        data_row = [str(getattr(obj, field.name)) for field in self.model._meta.fields]
        data.append(data_row)
    
    table = Table(data)
    table.setStyle(TableStyle(
        [
            ('BACKGROUND', (0,0), (-1,0), colors.grey),
            ('GRID', (0,0), (-1,-1), 1, colors.black),
        ]
    ))

    canvas_width = 600
    canvas_height = 600
    
    table.wrapOn(pdf, canvas_width, canvas_height)
    table.drawOn(pdf, 40, canvas_height - len(data))

    pdf.save()
    return response

download_pdf.short_description = 'Descargue aqui los items en formato pdf.'


@admin.register(Warranty_Type)
class warranty_typeAdmin(ImportExportModelAdmin):
    list_display = ('warranty_type_name',)
    search_fields = ('warranty_type_name',)
    actions = [download_pdf]
    
@admin.register(Warranty)
class warrantyAdmin(ImportExportModelAdmin):
    list_display = ('warranty_description', 'warranty_time', 'warranty_type',)
    list_filter = ('warranty_type',)
    list_per_page = 10
    actions = [download_pdf]
    
@admin.register(Brand)
class brandAdmin(ImportExportModelAdmin):
    list_display = ('name_brand',)
    search_fields = ('name_brand',)
    list_per_page = 10
    actions = [download_pdf]
    
@admin.register(Product)
class productAdmin(ImportExportModelAdmin):
    list_display = ('product_name', 'product_description', 'product_reference', 'product_value', 'product_quantity', 'brand','category',)
    list_editable = ('product_value', 'product_quantity','product_description','brand',)
    search_fields = ('product_name', 'product_reference', 'brand__name_brand',)
    list_filter = ('brand','category',)
    list_per_page = 10
    actions = [download_pdf]

@admin.register(Category)
class categoryAdmin(ImportExportModelAdmin):
    list_display = ('category_name', 'description_category', )
    list_editable = ('description_category',)
    list_filter = ('category_name',)
    list_display_links = ('category_name',)
    list_per_page = 10  
    actions = [download_pdf]
    
@admin.register(Customer_Order_Status)
class customer_order_statusAdmin(ImportExportModelAdmin):
    list_display = ('state_requested', 'description_state_requested',)
    list_editable =('description_state_requested',)
    search_fields = ('state_requested',)
    actions = [download_pdf]

@admin.register(Customer_Order)
class customer_orderAdmin(ImportExportModelAdmin):
    list_display = ('date_order', 'order_quantity', 'customer_order_status', 'client', 'product', 'scheduling','employee')
    list_editable = ('customer_order_status',)
    list_filter = ('product',)
    list_per_page = 10
    actions = [download_pdf]
    
@admin.register(Sale)
class sale_Admin(ImportExportModelAdmin):
    list_display = ('sale_date', 'quantity', 'price', 'subtotal', 'vat', 'total', 'warranty', 'product', 'employee', 'custom_order',)
    list_editable = ('price',)
    list_filter = ('employee',)
    list_per_page = 2
    actions = [download_pdf]

class Warranty_TypeResource(resources.ModelResource):
    class Meta:
        model = Warranty_Type
        fields = ('warranty_type_name')
        actions = [download_pdf]

class WarrantyResource(resources.ModelResource):
    class Meta:
        model = Warranty
        fields = ('warranty_description', 'warranty_time', 'warranty_type')
        actions = [download_pdf]

class BrandResource(resources.ModelResource):
    class Meta:
        model = Brand
        fields = ('name_brand')
        actions = [download_pdf]

class ProductResource(resources.ModelResource):
    class Meta:
        model = Product
        fields = ('product_name', 'product_description', 'product_reference', 'product_value', 'product_quantity', 'brand','category',)
        actions = [download_pdf]
        
class CategoryResource(resources.ModelResource):
    class Meta:
        model = Category
        fields = ('category_name', 'description_category')
        actions = [download_pdf]

class Customer_Order_StatusResource(resources.ModelResource):
    class Meta:
        model = Customer_Order_Status
        fields = ('state_requested', 'description_state_requested')
        actions = [download_pdf]

class Customer_OrderResource(resources.ModelResource):
    class Meta:
        model = Customer_Order
        fields = ('date_order', 'order_quantity', 'customer_order_status', 'client', 'product', 'scheduling','employee')
        actions = [download_pdf]

class SaleResource(resources.ModelResource):
    class Meta:
        model = Sale
        fields = ('sale_date', 'quantity', 'price', 'subtotal', 'vat', 'total', 'warranty', 'product', 'employee', 'custom_order')
        actions = [download_pdf]
    