@extends('layouts.adminmaster')
@section('admin_contents')

<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 ">
        <div class="tabledata">
            <div class="card">
              <div class="card-body">
              <table class="table">
                  <tbody>
                    
                    
                    <tr>
                      <th scope="row">Id</th>
                      <td colspan="2">:</td>
                      <td>{{$alldata->id}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Post title</th>
                      <td colspan="2">:</td>
                      <td>{{$alldata->post_title}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Post Description</th>
                      <td colspan="2">:</td>
                      <td>{{$alldata->post_desc}}</td>
                    </tr>




                  </tbody>
                </table>
              </div>
            </div>


          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection