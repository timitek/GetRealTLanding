
 @component('mail::message')
 # New Signup
 
 A new user has signed up for your service
 
 # Signup Details
 @component('mail::table')
 | Field         | Value         |
 | ------------- |:-------------:|
 | First Name    | {{$firstName}} |
 | Last Name     | {{$lastName}} |
 | Email         | {{$email}} |
 | Phone         | {{$phone}} |
 | Address       | {{$address}} |
 | City          | {{$city}} |
 | State         | {{$state}} |
 | Zip           | {{$zip}} |
 | Theme         | {{$theme}} |
 | Domain        | {{$domain}} |
 | Hosting       | {{$hosting}} |
 | Agent         | {{$agent}} |
 @endcomponent

 # Image Details
 @component('mail::table')
 | Type         | Location         |
 | ------------- |:-------------:|
 @foreach ($images as $image)
 | {{$image['type']}}    | [{{$image['filename']}}](http://landing.dev/images/{{$image['filename']}}) |
 @endforeach
 @endcomponent
 
 Thanks,<br>
 {{ config('app.name') }}
 @endcomponent