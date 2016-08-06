
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info">May 05,2014,03:00 pm </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><strong>{{ $producto->nombre }}</strong></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://placeholdit.imgix.net/~text?txtsize=28&bg=330000&txt=300%C3%97300&w=300&h=300" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Precio:</td>
                        <td>{{ $producto->precio }}</td>
                      </tr>
                      <tr>
                        <td>Marca:</td>
                        <td>{{ $producto->marca->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Categoria:</td>
                        <td>{{ $producto->categoria->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Tipo Producto:</td>
                        <td>{{ $producto->tipoproducto->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Vendedor:</td>
                        <td>{{ $producto->usuario->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:{{ $producto->usuario->email }}">{{ $producto->usuario->email }}/a></td>
                      </tr>
                      <tr>
                        <td>Telefono</td>
                        <td>{{ $producto->usuario->telefono }}</td>
                      </tr>
                      <tr>
                        <td>Descripcion:</td>
                        <td>{{ $producto->descripcion }}</td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                    <a href="mailto:{{ $producto->usuario->email }}" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                        <a href="{{ route('admin.productos.edit', $producto) }}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    </span>
                </div>
            
          </div>
        </div>
      </div>
    </div>
