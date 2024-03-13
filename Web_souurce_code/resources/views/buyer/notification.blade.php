@extends('layouts.buyer-app')

@section('content')
<style>
.row{
  margin:auto;
  padding: 30px;
  width: 100%;
  display: flex;
  flex-flow: column;
}
  .card{
    width: 84%;
    margin-bottom: 5px;
    display: block;
    transition: opacity 0.3s;

height: 69px;

/* logo blue */
margin: 0 auto;
border: 1px solid #3D76E1;
filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
border-radius: 8px;
  }

    .card-title {
    margin-bottom: 0.75rem;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 600;
    font-size: 15px;
    line-height: 18px;
    color: #4D4D4D;
    /* display: flex; */
    /* flex-direction: column; */
    margin-top: 13px;

}



.card-body{
  padding: 0.5rem;
}
  table{
    width: 100%;
}
    tr{
      display:flex;
  }
      td{}
        a.btn{
          font-size: 0.8rem;
          padding: 3px;
        }

      td:nth-child(2){
        text-align:right;
        justify-content: space-around;
      }



    .table-row{



    }

    .view-btn{
        font-family: 'Inter';
font-style: normal;
font-weight: 600;
font-size: 18px;
line-height: 182.02%;
/* identical to box height, or 33px */

text-decoration-line: underline;

/* logo green 3 */

color: #6E7E1D;
    }

.card-title:before{
  display:inline-block;
  font-family: 'Font Awesome\ 5 Free';
  font-weight:900;
  font-size: 1.1rem;
  text-align: center;
  border: 2px solid grey;
  border-radius: 100px;
  width: 30px;
  height: 30px;
  padding-bottom: 3px;
  margin-right: 10px;
}

.notification-invitation {
}
  .card-body {
  }
    /*.card-title:before {
      color: #90CAF9;
      border-color: #90CAF9;
      content: "\f007";
    }*/


.notification-warning {
}
  .card-body {
  }
    /*.card-title:before {
      color: #FFE082;
      border-color: #FFE082;
      content: "\f071";
    }*/



.notification-danger {
}
  .card-body {
  }
    /*.card-title:before {
      color: #FFAB91;
      border-color: #FFAB91;
      content: "\f00d";
    }*/



.notification-reminder {
}
  .card-body {
  }
    /*.card-title:before {
      color: #CE93D8;
      border-color: #CE93D8;
      content: "\f017";
    }*/



.card.display-none{
  display: none;
  transition: opacity 2s;
}


</style>
<div class="container-fluid "  style="background-color: lightgrey; padding-bottom: 97px;">
<div class="container" style="background-color: white; height: 450px; position: relative;
    top: 20px; overflow-y: scroll;" >
    <div class="profile-edit" style="margin-top: 20px;">
    <h3>Notification</h3>
    <!-- <a style="border: 1px solid #6e840b; padding: 10px 20px" href="#">Create RFQ</a> -->

        </div>

        <?php
          if(isset($notification)){
            foreach ($notification as $key => $value) { ?>
                <div class="row notification-container">
                  <span style="font-family: 'Montserrat';font-style: normal;font-weight: 400;font-size: 16px;line-height: 182.02%;margin-bottom: 2px;color: #333537;margin-left: 8%;

              ">{{ date('d-M-Y', strtotime($value->created_at))}}, {{ date('h:i a', strtotime($value->created_at))}}</span>
                 <div class="card notification-card notification-invitation">
                  <div class="card-body" style="min-height: 60px;">
                    <table>
                      <tr>
                        <td class="table-row"style="width:70%"><div class="card-title">{{ $value->message }}</div></td>
                        <td style="width:30%">
<!--                          <a href="#" class="view-btn">View</a>-->
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
        <?php
            }
          }
        ?>

<!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>

    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->

</div>

@endsection