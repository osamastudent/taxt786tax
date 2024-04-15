<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- sweet -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>show</title>
    <style>
        .custom-swal-title {
            font-size: 14px !important;
            /* Adjust the font size as needed */
        }

        .custom-swal-text {
            font-size: 8px !important;
            background-color: black !important;
            color: white !important;
        }

        /* Add similar styles for other custom classes if needed */
    </style>
</head>

<body>

    <table class="table bordered">
        <thead>
            <tr>
                <th scope="col">Index</th>
                <th scope="col">Email</th>
                <th scope="col">CNIC Number</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Files</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $values)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $values->email }}</td>
                <td>{{ $values->cnic_number }}</td>
                <!-- <td>{{ myHelper($values->created_at, 'd-M-Y') }}</td> -->
                <!-- <td>{{ $values->created_at->format('d-M-Y') }}</td> -->
                <!-- <td>{{ $values->created_at->format("F j, Y, g:i a") }}</td>
                <td>{{ $values->created_at->diffForHumans() }}</td> -->



                <td>{{ $values->mobile_no }}</td>
                <!-- Display files from JSON array -->
                <td>
                    @if ($values->postal_address)
                    @foreach(json_decode($values->postal_address) as $file)
                    <div>
                        {{ $file }}
                        <img src="{{ asset('myfilesfolder/'.$file) }}" height="50" alt="{{ $file }}">
                    </div>
                    @endforeach
                    @endif
                </td>
                <td>
                    <a onclick="return confirm('Do you want to delete?')" href="{{ url('delete', $values->id) }}">Delete</a>
                    <a onclick="ConfirmFun(event)" href="{{ url('delete', $values->id) }}">Delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

  <script>
    function ConfirmFun(ev) {
        ev.preventDefault();
        var redirectToURL = ev.currentTarget.getAttribute('href');

        Swal.fire({
            title: "Are You sure You want to delete this?",
            text: "You won't be able to revert this delete!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel',
            buttons:true,
            dangerMode: true,
            
            customClass: {
        container: 'custom-swal-container',
        popup: 'custom-swal-popup',
        title: 'custom-swal-title',
        text: 'custom-swal-text',
        confirmButton: 'custom-swal-confirm-button',
        cancelButton: 'custom-swal-cancel-button',
    },
    timer: 20000, // 10 seconds
        timerProgressBar: true,
        })

        .then((result) => {
            if (result.isConfirmed) {
                window.location.href = redirectToURL;
            }
        });
    }
</script>


    <!-- <script>
        function ConfirmFun(ev) {
            ev.preventDefault();
            var redirectToURL = ev.currentTarget.getAttribute('href');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                //   icon: "question",
                showCancelButton: true,
                confirmButtonText: 'Delete',
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your record has been deleted.",
                        icon: "success"
                    });
                }
            });

        }
    </script> -->


    <script>
    function ConfirmFun(ev) {
        ev.preventDefault();
        var redirectToURL = ev.currentTarget.getAttribute('href');

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: 'Delete',
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Assuming the server-side deletion is synchronous for simplicity
                // You may need to adjust this based on your server implementation
                fetch(redirectToURL, {
                    method: 'DELETE',
                })
                .then(() => {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your record has been deleted.",
                        icon: "success"
                    }).then(() => {
                        window.location.href = redirectToURL;
                    });
                })
                .catch((error) => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: "Error!",
                        text: "Failed to delete the record.",
                        icon: "error"
                    });
                });
            }
        });
    }
</script>




</body>

</body>

</html>