<section class="tables">   
    <div class="container-fluid">
                 
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h3">LISTADO: &nbsp; Solicitud de Pabellón</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">   
                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr class="bg-info">
                              <th  title="descripción o información"><font color="white">rut/pasaporte</font> </th>
                              <th title="Hipertensión Arterial"><font color="white">HTA</font></th>
                              <th title="Hipertensión Arterial"><font color="white">BM</font></th>
                              <th title="Hipertensión Arterial"><font color="white">IR</font></th>
                              <th title="Hipertensión Arterial"><font color="white">NO_IR</font></th>
                              <th title="Hipertensión Arterial"><font color="white">Dislipidemia</font></th>
                              <th title=""><font color="white">Obesidad</font></th>
                              <th title=""><font color="white">IMC</font></th>
                              <th title=""><font color="white">Hipoterioidismo</font></th>
                              <th title=""><font color="white">EPOC</font></th>
                              <th title=""><font color="white">Dialisis</font></th>
                              <th title=""><font color="white">IMV</font></th>
                              <th title=""><font color="white">MJS</font></th>
                              <th title=""><font color="white">TBQ</font></th>
                              <th title=""><font color="white">Otros</font></th>
                              <th title=""><font color="white">Diagnostico</font></th>
                              <th title=""><font color="white">S_D</font></th>
                              <th title=""><font color="white">Si</font></th>
                              <th title=""><font color="white">No</font></th>
                              <th title=""><font color="white">Fecha</font></th>
                              <th title=""><font color="white">Plan_quirurgico</font></th>
                              <th title=""><font color="white">S_P_Q</font></th>
                              <th title=""><font color="white">HOSP</font></th>
                              <th title=""><font color="white">Ambulatorio</font></th>
                              <th title=""><font color="white">Duracion</font></th>
                              <th title=""><font color="white">Requerimientos</font></th>
                              <th title=""><font color="white">Prioridad</font></th>
                              <th title=""><font color="white">Razon</font></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($lista as $lista_de_pacientes)
                            <tr>
                              <td>{{$lista_de_pacientes->rut_pasaporte}}</td>
                              <td>{{$lista_de_pacientes->hta}}</td>
                              <td>{{$lista_de_pacientes->bm}}</td>
                              <td>{{$lista_de_pacientes->insulina_req}}</td>
                              <td>{{$lista_de_pacientes->no_ir}}</td>
                              <td>{{$lista_de_pacientes->dislipidemia}}</td>
                              <td>{{$lista_de_pacientes->obesidad}}</td>
                              <td>{{$lista_de_pacientes->imc}}</td>
                              <td>{{$lista_de_pacientes->hipoterioidismo}}</td>
                              <td>{{$lista_de_pacientes->epoc}}</td>
                              <td>{{$lista_de_pacientes->dialisis}}</td>
                              <td>{{$lista_de_pacientes->lmv}}</td>
                              <td>{{$lista_de_pacientes->mjs}}</td>
                              <td>{{$lista_de_pacientes->tbq}}</td>
                              <td>{{$lista_de_pacientes->otros}}</td>
                              <td>{{$lista_de_pacientes->diagnostico}}</td>
                              <td>{{$lista_de_pacientes->sigla_diagnostico}}</td>
                              <td>{{$lista_de_pacientes->si}}</td>
                              <td>{{$lista_de_pacientes->no}}</td>
                              <td>{{$lista_de_pacientes->fecha}}</td>
                              <td>{{$lista_de_pacientes->plan_quirurgico}}</td>
                              <td>{{$lista_de_pacientes->sigla_plan_quirurgico}}</td>
                              <td>{{$lista_de_pacientes->hosp}}</td>
                              <td>{{$lista_de_pacientes->ambulatorio}}</td>
                              <td>{{$lista_de_pacientes->duracion}}</td>
                              <td>{{$lista_de_pacientes->requerimientos}}</td>
                              <td>{{$lista_de_pacientes->prioridad}}</td>
                              <td>{{$lista_de_pacientes->razon}}</td>
                            </tr>

                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                
              </div>
            </div>
            </div>
          </section>