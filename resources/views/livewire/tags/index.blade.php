<div class="overflow-hidden border border-gray-200 shadow sm:rounded-lg">

    <div class="mt-5 bg-gray-400">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Created Date</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
                <tr>
                    @foreach ($tags as $tag)
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->slug}}</td> 
                        <td>{{$tag->created_at->format('m/d/y') }}</td>                   
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>