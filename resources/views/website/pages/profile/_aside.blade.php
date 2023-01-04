<div class="shadow-custom rounded-4 bg-white ">
    <ul class="list-group text-center">
        <li class="list-group-item p-3 {{ Request::is('**profile*') ? 'bg-primary' : '' }}">
            <a href="{{ route('website.profile') }}"
                class="{{ Request::is('**profile*') ? 'text-white' : '' }}">profile</a>
        </li>
        <li class="list-group-item p-3 {{ Request::is('*update-information*') ? 'bg-primary' : '' }}">
            <a href="{{ route('website.update_information') }}"
                class="{{ Request::is('*update-information*') ? 'text-white' : '' }}">Update
                Information</a>
        </li>
        <li class="list-group-item p-3 {{ Request::is('*update-password*') ? 'bg-primary' : '' }}">
            <a href="{{ route('website.update_password') }}"
                class="{{ Request::is('*update-password*') ? 'text-white' : '' }}">Update Password</a>
        </li>
        <li class="list-group-item p-3 {{ Request::is('*my-request*') ? 'bg-primary' : '' }}">
            <a href="{{ route('website.my_requests') }}"
                class="{{ Request::is('*my-request*') ? 'text-white' : '' }}">My
                Requests</a>
        </li>
        <li class="list-group-item p-3 bg-danger ">
            <a href="{{ route('website.logout') }}" class="text-white">Logout</a>
        </li>
    </ul>
</div>
