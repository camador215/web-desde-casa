<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<script src="https://cdn.tailwindcss.com"></script>

<!-- ====== Services Section Start -->
<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]">
   <div class="container"> 
      
      <div class="flex flex-wrap -mx-4">
         @foreach($noticias as $noticia)
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
               class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               "
               >
               
               <h4 class="font-semibold text-xl text-dark mb-3">
                  {{ $noticia->titulo }}
               </h4>
               <p class="text-body-color">
                  {{ $noticia->contenido }}
               </p>
            </div>
         </div> 
         @endforeach
      </div>
   
   </div> 
   <div class="flex flex-wrap -mx-4" content-center	> 
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
               class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               "
               >
               
               <h4 class="font-semibold text-xl text-dark mb-3">
                  Total de Visitas
               </h4>
               <p class="text-body-color">
               @php  
                     $isActive = false;
                     $hasError = true;

                     $Userver = "localhost";
                     $Uuser = "root";
                     $Upass = "";
                     $Udb = "dbprueba";

                  $con = new mysqli($Userver,$Uuser,$Upass,$Udb);
                  if($con->connect_errno){
                     echo "Ha ocurrido un error";        
                  }


                  @include('conexion.php'); 
                  date_default_timezone_set("America/La_Paz");

                  $ip = $_SERVER['REMOTE_ADDR'];

                  $sqlConsultar = $con->query("SELECT * FROM contador WHERE ip = '$ip' ORDER BY id desc");
                  $contarConsultar = $sqlConsultar->num_rows;

                  if($contarConsultar == 0){
                     $sqlInsertar = $con->query("INSERT INTO contador (ip,fecha) VALUES ('$ip',now())");
                  }else{
                     $row = $sqlConsultar->fetch_array();
                     $fechaRegistro = $row['fecha'];
                     $fechaActual = date("Y-m-d H:i:s");
                     $nuevaFecha = strtotime($fechaRegistro."+ 1 Hour");
                     $nuevaFecha = date("Y-m-d H:i:s", $nuevaFecha); 
                     if($fechaActual >= $nuevaFecha){
                           $sqlInsertar = $con->query("INSERT INTO contador (ip, fecha) VALUES ('$ip',now())");
                     }
                  }

                  $visitas = $con->query("SELECT * FROM contador");
                  $contar = $visitas->num_rows;
                  
                  echo $contar;
               @endphp 
               </p>
            </div>
         </div>  
   </div>
</section>

<!-- ====== Services Section End -->