<div class="mt-3 col-12">
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>airline</td>
                <td>number of planes</td>
                <td>price per ticket</td>
                <td>tools</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($flights as $flight){?>
            <tr>
                <td>{{ $flight->id }}</td>
                <td>{{ $flight->name }}</td>
                <td>{{ $flight->airline }}</td>
                <td>{{ $flight->number_of_planes }}</td>
                <td>{{ $flight->price_per_ticket }}</td>
                <td>
                    <a class="btn btn-warning" href="/flight/{{ $flight->id }}">
                        แก้ไข
                    </a>
                    <form action="/flight/{{ $flight->id }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">ลบ</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>