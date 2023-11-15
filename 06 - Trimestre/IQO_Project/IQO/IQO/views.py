from django.shortcuts import render
from django.contrib.auth import login
from django.contrib.auth import authenticate
from django.shortcuts import redirect
from django.contrib.auth import logout
from django.contrib import messages

def index(request):
    return render(request, 'index.html',{
        #context
    })
    


def login_view(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        user = authenticate(username=username, password=password)
        if user:
            login(request, user)
            messages.success(request, 'Bienvenido {}'.format(user.username))
            return redirect('admin:index')
        else: 
            messages.error(request, 'Usuario o contraseña incorrectos')
    return render(request, 'login.html',{

    })

def quienessomos_view(request):
    return render(request, 'quienessomos.html',{
        #context
    })

def camaras_view(request):
    return render(request, 'camaras.html',{
        #context
    })

def discos_view(request):
    return render(request, 'discos.html',{
        #context
    })

def dvr_view(request):
    return render(request, 'dvr.html',{
        #context
    })

def fuentes_view(request):
    return render(request, 'fuentes.html',{
        #context
    })

def ups_view(request):
    return render(request, 'ups.html',{
        #context
    })

def contacto_view(request):
    return render(request, 'contacto.html',{
        #context
    })

def roles_view(request):
    return render(request, 'roles.html',{
        #context
    })

def registro_view(request):
    return render(request, 'registro.html',{
        #context
    })
    
def consultar_ventas(request):
    # Tu lógica de consulta de ventas aquí si es necesario
    return render(request, 'administrador/consultar_ventas.html',{
        #context
    })
    
def indexadmin(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/indexadmin.html',{
        #context
    })
    
def crear_orden_compra(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/crear_orden_compra.html',{
        #context
    })
    
def listar_empleado(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/listar_empleado.html',{
        #context
    })
    
def listar_orden_compra(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/listar_orden_compra.html',{
        #context
    })

def listar_producto(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/listar_producto.html',{
        #context
    })
    
def listar_proveedor(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/listar_proveedor.html',{
        #context
    })
    
def registrar_empleado(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/registrar_empleado.html',{
        #context
    })

def registrar_producto(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/registrar_producto.html',{
        #context
    })
    
def registrar_proveedor(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/registrar_proveedor.html',{
        #context
    })
    
def registrar(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/registrar.html',{
        #context
    })
    
def servicios_tecnicos(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'administrador/servicios_tecnicos.html',{
        #context
    })
    
def indexgerente(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/indexgerente.html',{
        #context
    })
    
def consultar_ventasG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/consultar_ventasG.html',{
        #context
    })
    
def crear_orden_compraG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/crear_orden_compraG.html',{
        #context
    })
    
def listar_empleadoG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/listar_empleadoG.html',{
        #context
    })
    
def listar_orden_compraG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/listar_orden_compraG.html',{
        #context
    })
    
def listar_productoG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/listar_productoG.html',{
        #context
    })
    
def listar_proveedorG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/listar_proveedorG.html',{
        #context
    })
    
def registrar_empleadoG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/registrar_empleadoG.html',{
        #context
    })
    
def registrar_productoG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/registrar_productoG.html',{
        #context
    })
    
def registrar_proveedorG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/registrar_proveedorG.html',{
        #context
    })
    
def registrar_Ge(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/registrar_Ge.html',{
        #context
    })
    
def servicios_tecnicosG(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'gerente/servicios_tecnicosG.html',{
        #context
    })
    
def comprobante(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'vendedor/comprobante.html',{
        #context
    })
    
def consultar_clientes(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'vendedor/consultar_clientes.html',{
        #context
    })
    
def consultar_estado_inventario(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'vendedor/consultar_estado_inventario.html',{
        #context
    })
    
def consultar_orden_pedido(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'vendedor/consultar_orden_pedido.html',{
        #context
    })
    
def consultar_ventasV(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'vendedor/consultar_ventasV.html',{
        #context
    })
    
def crear_orden_pedido(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'vendedor/crear_orden_pedido.html',{
        #context
    })
    
def indexvendedor(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'vendedor/indexvendedor.html',{
        #context
    })
    
def registrar_ventas(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'vendedor/registrar_ventas.html',{
        #context
    })
    
def indextecnico(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'tecnico/indextecnico.html',{
        #context
    })
    
def consultar_servicio_tecnico(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'tecnico/consultar_servicio_tecnico.html',{
        #context
    })
    
def registrar_novedad_servicios(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'tecnico/registrar_novedad_servicios.html',{
        #context
    })
    
def catalogo(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'catalogo.html',{
        #context
    })
    
def crear_orden_compraC(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'cliente/crear_orden_compraC.html',{
        #context
    })
    
def indexcliente(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'cliente/indexcliente.html',{
        #context
    })
    
def indexmensajero(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'mensajero/indexmensajero.html',{
        #context
    })
    
def consultar_orden_compraMen(request):
    # Tu lógica para la vista aquí si es necesario
    return render(request, 'mensajero/consultar_orden_compraMen.html',{
        #context
    })