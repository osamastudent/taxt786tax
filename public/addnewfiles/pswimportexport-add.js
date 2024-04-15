// <!-- this is for add new file 1 -->

    document.getElementById('AddNewFile').addEventListener('click', function() {
        addNewFileField();
    });


    function addNewFileField() {
        // Clone the existing file field container
        var clone = document.getElementById('cloneData').cloneNode(true);

        // Remove the ID to prevent duplicate IDs
        clone.removeAttribute('id');

        // Create a button element 
        var colum = document.createElement("div");
        colum.className = 'col-12 add-new-file text-end';

        // Create a button element with Bootstrap classes
        var deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn float-end delete-btn btn-danger  mt-2'; // Bootstrap classes applied
        deleteButton.innerText = 'Delete';


        deleteButton.addEventListener('click', function() {
            // Remove the corresponding file field when the delete button is clicked
            clone.remove();
        });

        // // Apply CSS styles to the "Delete" button
        // deleteButton.style.width = '120px'; // Adjust the width as needed
        // deleteButton.style.height = '40px'; // Adjust the height as needed
        // deleteButton.style.marginRight = '10px'; // Adjust the margin as needed
        // deleteButton.style.float = 'right'; // Align to the right
        // deleteButton.style.cssText = "height:38px; width:80px; margin-left:10px;";
        // Add more styles as needed
        colum.appendChild(deleteButton);
        // Append the delete button to the new field
        clone.appendChild(colum);

        // Append the cloned container with the delete button to the filesContainer
        document.getElementById('filesContainer').appendChild(clone);



    }


    
    

   
