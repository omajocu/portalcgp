<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Modern UI CSS">
    <meta name="author" content="Sergey Pimenov">
    <meta name="keywords" content="windows 8, modern style, modern ui, style, modern, css, framework">

    <link href="css/modern.css" rel="stylesheet">
    <link href="css/theme-dark.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">

    <script src="js/assets/jquery-1.8.2.min.js"></script>
    
    <script src="js/modern/tile-slider.js"></script>
   
   
    
    <script src="js/modern/pagecontrol.js"></script>

    <title>Portal de Gestión - CGP IBERIA</title>

    <style>
        body {
            background: #FFFFFF;
        }
    </style>
    
</head>
<body class="metrouicss">
    
    
    <div class="page secondary">
        <div class="page-header ">
            <div class="page-header-content">
                <div class="user-login">
                    <a href="#">
                        <div class="name">
                            <span class="first-name fg-color-blue">IE CGP</span>
                            <span class="last-name fg-color-blue">Admin</span>
                        </div>
                        <div class="avatar">
                            <!--<img src="images/myface.jpg"/>-->
                            <i class="icon-user fg-color-blue"></i>
                        </div>
                    </a>
                </div>
                <h1 class="fg-color-blue">CGP Iberia</h1>
            </div>
        </div>
        <div class="page-region">
            <div class="span13">
                <div class="nav-bar">
                    <div class="nav-bar-inner">
                        <span class="element brand"></i>Gestion de Incidencias</span>
                        <span class="divider"></span>

                        <ul class="menu">
                            <li><a href="index.php"><i class="icon-home" title="Inicio"></i></a></li>
                            <li><a href="#" onclick="NuevaIncidencia()"><i class="icon-plus-2" title="Crear nueva incidencia"></i></a></li>
                            <li><a href="#" onclick="BuscaCerradas()"><i class="icon-search" title="Realizar busqueda en el historico"></i></a></li>
                            <li> </li>
                            <li> </li>
                            <li><a href="#" onclick="SelecAdmin()"><i class="icon-wrench" title="Administra las categorias"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-header">
                <div class="page-header-content">
                    <h1>Layout<small>templates</small></h1>
                    <a href="/" class="back-button big page-back"></a>
                </div>
            </div>
        </div>
        <div class="page-region">
            <div class="page-region-content">
                <div class="row">
                    <div class="span10">
                        <div class="toolbar">
                            <button><i class="icon-home"></i></button>
                            <button><i class="icon-bookmark"></i></button>
                            <button><i class="icon-phone"></i></button>
                            <button><i class="icon-compass"></i></button>
                            <button><i class="icon-mail"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="right">Time CP</th>
                                <th class="right">Network</th>
                                <th class="right">Traffic</th>
                                <th class="right">Tiles update</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="selected-row"><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                            <tr><td>Internet Explorer</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                            <tr class="success"><td>Chrome</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                            <tr class="error"><td>News</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                            <tr class="warning"><td>Weather</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                            <tr class="info"><td>Music</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        </tbody>
                        
                        <tfoot></tfoot>
                    </table>
                </div>
                
                <div class="span10">
                    <fieldset>
                        <legend>Legend</legend>
                            <p class="tertiary-info-secondary-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                
                            <div class="page-control span9" data-role="page-control">
                                <span class="menu-pull"></span>
                                <div class="menu-pull-bar"></div>
                                <ul>
                                    <li class="active"><a href="#page1"><i class="icon-equalizer"></i>Page 1</a></li>
                                    <li><a href="#page2">Page 2</a></li>
                                    <li><a href="#page3">Page 3</a></li>
                                    <li class="place-right"><a href="#page4"><i class="icon-cog nrm"></i></a></li>
                                </ul>
                                <div class="frames">
                                    <div class="frame active" id="page1">
                                        <h2>Page 1</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed erat urna, non pulvinar nisi. Aenean quis tellus non magna pharetra fringilla non id ipsum. Aliquam quis nisl et mi vulputate consequat vel id lectus. Phasellus a porttitor turpis. Vivamus sit amet accumsan ligula. In porttitor odio id orci consectetur bibendum. Vestibulum vehicula posuere risus ac porta. Curabitur risus libero, tristique vel dictum a, blandit vel augue. Morbi ultricies eros eget massa malesuada aliquam. Nam quis est nibh. Proin eleifend laoreet aliquam.</p>
                                    </div>
                                    <div class="frame" id="page2">
                                        <h2>Page 2</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit condimentum nibh, vitae lobortis velit laoreet non. Pellentesque feugiat turpis nec est gravida posuere scelerisque metus interdum. Morbi ante dui, luctus posuere tempus ut, convallis vitae velit. Aliquam auctor vehicula volutpat. Donec fermentum turpis nec nulla elementum pellentesque. Aenean tristique ullamcorper nisi et placerat. Pellentesque euismod sagittis tincidunt. Ut non augue tellus, eget fringilla tellus. Morbi sit amet leo a tortor dictum aliquet tempus nec arcu. Morbi iaculis nisi vitae libero tempus tristique. Vestibulum blandit, tortor rhoncus viverra ultrices, risus libero vulputate eros, nec aliquet nisl justo id elit. Ut facilisis, arcu vel lobortis ultricies, sapien dolor porttitor mi, vitae mollis lorem nunc vel leo. Nam iaculis justo at nibh eleifend scelerisque.</p>
                                    </div>
                                    <div class="frame" id="page3">
                                        <h2>Page 3</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nunc orci, sed convallis mi. Mauris et risus neque, id blandit libero. Integer vel justo enim. Suspendisse semper neque sit amet velit dapibus varius. Nunc laoreet, velit et gravida feugiat, arcu dui dictum lacus, at aliquet libero lectus sed risus. In hac habitasse platea dictumst. Aenean mattis pulvinar tristique. Curabitur dolor lacus, convallis vitae lacinia ut, fermentum ut metus. Proin eu elementum nisi.</p>
                                    </div>
                                    <div class="frame" id="page4">
                                        <h2>Page 4</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta condimentum sem sed commodo. Praesent vestibulum, libero eget lacinia pretium, metus augue dapibus odio, nec placerat mauris justo non ante. Maecenas adipiscing nulla sed sem molestie quis pulvinar lectus convallis. Nam tortor arcu, gravida nec tristique sit amet, pretium sagittis eros. Curabitur at nisi ut ligula ornare euismod. Ut vitae tortor eget elit dictum dictum. Ut porttitor, ante non blandit gravida, felis risus feugiat neque, eu tincidunt neque ante at urna. Maecenas nec felis nulla. Praesent volutpat ligula vel diam venenatis feugiat. Praesent quis nunc quis nisl condimentum dapibus in sed ipsum. Aenean nulla sapien, consequat id aliquam ac, sollicitudin sed nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis vitae risus erat.</p>
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </div>   
            </div>
        </div>
        
        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <div class="grid">
                        <fieldset>
                            <legend>Alta de nueva sede</legend>
                            <div class="row">
                                <div class="input-control span8 text">
                                    <label class="fg-color-blue">Aeropuerto</label>
                                    <input type="text" autofocus/>                                
                                </div>
                                <div class="input-control text offset8 ">
                                    <label class="fg-color-blue">Siglas</label>
                                    <input type="text" autofocus/>                                          
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-control span7 text">
                                    <label class="fg-color-blue">Calle</label>
                                    <input type="text" autofocus/>                                
                                </div>
                                <div class="input-control text offset7 ">
                                    <label class="fg-color-blue">Población</label>
                                    <input type="text" autofocus/>                                          
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="input-control span8 text">
                                    <label class="fg-color-blue">Provincia</label>
                                    <input type="text" autofocus/>                                
                                </div>
                                <div class="input-control text offset8 ">
                                    <label class="fg-color-blue">Area</label>
                                    <input type="text" autofocus/>                                          
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="input-control textarea">
                                    <label class="fg-color-blue">Comentarios</label>
                                    <textarea></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <div class="grid">
                        <fieldset>
                            <legend>Alta de nuevo contacto</legend>
                            <div class="row">
                                <div class="input-control span7 text">
                                    <label class="fg-color-blue">Contacto</label>
                                    <input type="text" autofocus/>
                                </div>
                                <div class="input-control text offset7 ">
                                    <label class="fg-color-blue">Teléfono</label>
                                    <input type="text" autofocus/>                                          
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-control span5 text">
                                    <label class="fg-color-blue">Teléfono Móvil</label>
                                    <input type="text" autofocus/>                                
                                </div>
                                <div class="input-control text offset5 ">
                                    <label class="fg-color-blue">E-Mail</label>
                                    <input type="text" autofocus/>                                          
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="input-control span6 text">
                                    <label class="fg-color-blue">Cargo</label>
                                    <input type="text" autofocus/>                                
                                </div>
                                <div class="input-control text offset6 ">
                                    <label class="fg-color-blue">Horario</label>
                                    <input type="text" autofocus/>                                          
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="input-control textarea">
                                    <label class="fg-color-blue">Descripción</label>
                                    <textarea></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <div class="grid">
                        <fieldset>
                            <legend>Alta de nuevo equipo</legend>
                            <div class="row">
                                <div class="input-control span7 text">
                                    <label class="fg-color-blue">Marca</label>
                                    <input type="text" autofocus/>
                                </div>
                                <div class="input-control text offset7 ">
                                    <label class="fg-color-blue">Modelo</label>
                                    <input type="text" autofocus/>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-control span5 text">
                                    <label class="fg-color-blue">Mnemonico</label>
                                    <input type="text" autofocus/>
                                </div>
                                <div class="input-control text offset5 ">
                                    <label class="fg-color-blue">IP de gestión</label>
                                    <input type="text" autofocus/>      
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
                        
        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <div class="grid">
                        <fieldset>
                            <legend>Alta de nueva línea</legend>
                            <div class="row">
                                <div class="input-control span6 text">
                                    <label class="fg-color-blue">Administrativo</label>
                                    <input type="text" autofocus/>
                                </div>
                                <div class="input-control text offset6 ">
                                    <label class="fg-color-blue">Teléfono</label>
                                    <input type="text" autofocus/>      
                                </div>
                            </div>
                        <fieldset>
                            <legend>PE principal</legend>
                            <div class="row">
                                <div class="input-control span6 text">
                                    <label class="fg-color-blue">PE</label>
                                    <input type="text" autofocus/>
                                </div>
                                <div class="input-control text offset6 ">
                                    <label class="fg-color-blue">Subinterfaz</label>
                                    <input type="text" autofocus/>      
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="input-control span7 text">
                                    <label class="fg-color-blue">VRF</label>
                                    <input type="text" autofocus/>
                                </div>
                                <div class="input-control offset7 text">
                                    <label class="fg-color-blue">IP WAN PE</label>
                                    <input type="text" autofocus/>                                
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>PE Backup</legend>
                            <div class="row">
                                <div class="input-control span6 text">
                                    <label class="fg-color-blue">PE</label>
                                    <input type="text" autofocus/>
                                </div>
                                <div class="input-control text offset6 ">
                                    <label class="fg-color-blue">Subinterfaz</label>
                                    <input type="text" autofocus/>                                          
                                </div>
                            </div>                        
                            <div class="row">
                                <div class="input-control span7 text">
                                    <label class="fg-color-blue">VRF</label>
                                    <input type="text" autofocus/>                                
                                </div>
                                <div class="input-control offset7 text">
                                    <label class="fg-color-blue">IP WAN PE</label>
                                    <input type="text" autofocus/>                                
                                </div>  
                            </div>
                        </fieldset>
                        <div class="row">
                            <div class="input-control textarea">
                                <label class="fg-color-blue">Comentarios</label>
                                <textarea></textarea>
                            </div>
                        </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <div class="grid">
                        <fieldset>
                            <legend>Alta de nueva IP</legend>
                            <div class="row">
                                <label class="input-control radio" onclick="">
                                    <input type="radio" name="r1"  checked=""/>
                                    <span class="helper">IP LAN</span>
                                </label>

                                <label class="input-control radio" onclick="">
                                    <input type="radio" name="r1" />
                                    <span class="helper">IP WAN</span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="input-control span7 text">
                                    <label class="fg-color-blue">IP LAN/WAN</label>
                                    <input type="text" autofocus/>                                
                                </div>
                                <div class="input-control offset7 text">
                                    <label class="fg-color-blue">Máscara</label>
                                    <input type="text" autofocus/>                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-control span8 text">
                                    <label class="fg-color-blue">HSRP/VRRP</label>
                                    <input type="text" autofocus/>                                
                                </div>
                                <div class="input-control offset8 text">
                                    <label class="fg-color-blue">ID HSRP/VRRP</label>
                                    <input type="text" autofocus/>                                
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <div class="grid">
                        <fieldset>
                            <legend>Alta de nueva ruta</legend>
                            <div class="row">
                                <div class="input-control span9 text">
                                    <label class="fg-color-blue">Descripción</label>
                                    <input type="text" autofocus/>                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-control span7 text">
                                    <label class="fg-color-blue">Red</label>
                                    <input type="text" autofocus/>                                
                                </div>
                                <div class="input-control offset7 text">
                                    <label class="fg-color-blue">Máscara</label>
                                    <input type="text" autofocus/>                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-control span5 text">
                                    <label class="fg-color-blue">Puerta de enlace</label>
                                    <input type="text" autofocus/>                                
                                </div>                                
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <div class="grid">
                        <fieldset>
                            <legend>Información de la sede</legend>
                            <ul class="unstyled">
                                <li>
                                    <span class="label span2">Siglas</span><span class="label span2 bg-color-white">AGPAP</span>
                                    <span class="label span2">Aeropuerto</span><span class="label span2 bg-color-white">Aeropuerto de Málaga</span>                                
                                    <span class="label span2">Domicilio</span><span class="label span2 bg-color-white">Aeropuerto sn</span>                                
                                    <span class="label span2">Población</span><span class="label span2 bg-color-white">Malaga</span>                                
                                    <span class="label span2">Provincia</span><span class="label span2 bg-color-white">Malaga</span>                                
                                    <span class="label span2">Zona</span><span class="label span2 bg-color-white">Sur</span> 
                                </li>
                            </ul>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <div class="grid">
                        <fieldset>
                            <legend>Router principal - MacroLan</legend>
                            <ul class="unstyled">
                                <li>
                                    <span class="label span2">Administrativo</span><span class="label span2 bg-color-white">281000023456789</span>
                                    <span class="label span2">Teléfono</span><span class="label span2 bg-color-white">987654321</span>
                                    <span class="label span2">IP Gestión</span><span class="label span2 bg-color-white">10.54.234.5</span>
                                    <span class="label span2">Mnemonico</span><span class="label span2 bg-color-white">iberm-juca</span>
                                </li>
                                <fieldset>
                                    <legend>Datos WAN - VLAN 324</legend>
                                    <li>
                                        <span class="label span2">IP</span><span class="label span2 bg-color-white">10.231.45.23</span>
                                        <span class="label span2">Máscara</span><span class="label span2 bg-color-white">/30</span>
                                        <span class="label span2">VLAN PE</span><span class="label span2 bg-color-white">123</span>                                
                                        <span class="label span2">VLAN EDC</span><span class="label span2 bg-color-white">34</span>                                
                                        <span class="label span2">Caudal</span><span class="label span2 bg-color-white">10Mb</span>
                                    </li>
                                    <fieldset>
                                        <legend>PEs</legend>
                                        <table class="striped">
                                            <thead>
                                                <tr>
                                                    <th>Tipo</th>
                                                    <th class="right">Nombre</th>                                                    
                                                    <th class="right">VRF</th>
                                                    <th class="right">Subinterface</th>
                                                    <th class="right">IP WAN PE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Principal</td>
                                                    <td>NMAMRRO2</td>
                                                    <td>VRF_IBERIA_MACROLAN</td>
                                                    <td>ge-2/0/0.345</td>
                                                    <td>81.23.45.5</td>
                                                </tr>
                                                <tr>
                                                    <td>Backup</td>
                                                    <td>NMAMPEN1</td>
                                                    <td>VRF_IBERIA_MACROLAN</td>
                                                    <td>ge-1/0/0.34</td>
                                                    <td>81.23.45.4</td>
                                                </tr>                                                
                                            </tbody>
                                            <tfoot></tfoot>
                                        </table>                              
                                    </fieldset>
                                </fieldset>
                                <fieldset>
                                    <legend>Datos LAN</legend>
                                    <li>
                                        <span class="label span2">IP</span><span class="label span2 bg-color-white">10.23.45.23</span>
                                        <span class="label span2">Máscara</span><span class="label span2 bg-color-white">/24</span> 
                                        <span class="label span2">IP HSRP</span><span class="label span2 bg-color-white">10.23.45.25</span>                                
                                        <span class="label span2">ID HSRP</span><span class="label span2 bg-color-white">25</span>                                             
                                    </li>
                                </fieldset>                         
                                <fieldset>
                                    <legend>Comentarios</legend>
                                    <li>
                                        <table class="striped">
                                            <thead>
                                                <tr>
                                                    <th class="span2">Fecha</th>
                                                    <th class="offset2">Comentario</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="span2">10-04-2013 22:03</td>
                                                    <td class="offset2"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed erat urna, non pulvinar nisi. Aenean quis tellus non magna pharetra fringilla non id ipsum. Aliquam quis nisl et mi vulputate consequat vel id lectus. Phasellus a porttitor turpis. Vivamus sit amet accumsan ligula. In porttitor odio id orci consectetur bibendum. Vestibulum vehicula posuere risus ac porta. Curabitur risus libero, tristique vel dictum a, blandit vel augue. Morbi ultricies eros eget massa malesuada aliquam. Nam quis est nibh. Proin eleifend laoreet aliquam.</p></td>
                                                </tr>
                                                <tr>
                                                    <td class="span2">14-05-2013 16:45</td>
                                                    <td class="offset2"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed erat urna, non pulvinar nisi. Aenean quis tellus non magna pharetra fringilla non id ipsum. Aliquam quis nisl et mi vulputate consequat vel id lectus. Phasellus a porttitor turpis. Vivamus sit amet accumsan ligula. In porttitor odio id orci consectetur bibendum. Vestibulum vehicula posuere risus ac porta. Curabitur risus libero, tristique vel dictum a, blandit vel augue. Morbi ultricies eros eget massa malesuada aliquam. Nam quis est nibh. Proin eleifend laoreet aliquam.</p></td>
                                                </tr>                                                
                                            </tbody>
                                            <tfoot></tfoot>
                                        </table>
                                    </li>
                                </fieldset>
                            </ul>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>     
</body>
</html>