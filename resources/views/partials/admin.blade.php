@auth()
    @doctor
        <ul class="nav flex-column mb-3">
            <li class="nav-item">
                <a href="{{route('doctors.edit')}}" class="nav-link text-secondary">تعديل معلومات الطبيب<i class="fa fa-edit"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('posts.create')}}">اضافة مقال طبي<i class="fa fa-plus"></i></a>
            </li>
         </ul>
    @enddoctor
@endauth