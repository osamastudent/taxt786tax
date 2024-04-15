
// <!-- this is for add new file 1 -->

function addNewFileOne() {
    document.getElementById('AddNewFile').addEventListener('click', function () {
        addNewFileField();
    });


    function addNewFileField() {
        // Clone the existing file field container
        var clone = document.getElementById('cloneData').cloneNode(true);

        // Remove the ID to prevent duplicate IDs
        clone.removeAttribute('id');

        // Create a button element 
        var colum = document.createElement("div");
        colum.className = 'col-12 text-end';

        // Create a button element with Bootstrap classes
        var deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn float-end btn-danger delete-btn  mt-2'; // Bootstrap classes applied
        deleteButton.innerText = 'Delete';


        deleteButton.addEventListener('click', function () {
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


}

// <!-- this is for add new file 2 -->
function AddNewFileTwo() {
    document.getElementById('AddNewFile2').addEventListener('click', function () {
        addNewFileField2();
    });


    function addNewFileField2() {
        // Clone the existing file field container
        var clone = document.getElementById('cloneData2').cloneNode(true);

        // Remove the ID to prevent duplicate IDs
        clone.removeAttribute('id');

        // Create a button element 
        var colum = document.createElement("div");
        colum.className = 'col-12 text-end';

        // Create a button element with Bootstrap classes
        var deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn float-end btn-danger delete-btn  mt-2'; // Bootstrap classes applied
        deleteButton.innerText = 'Delete';


        deleteButton.addEventListener('click', function () {
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
        document.getElementById('filesContainer2').appendChild(clone);
    }


}




// <!-- this is for add new file 3 -->
function AddNewFileThree() {
    document.getElementById('AddNewFile3').addEventListener('click', function () {
        addNewFileField3();
    });


    function addNewFileField3() {
        // Clone the existing file field container
        var clone = document.getElementById('cloneData3').cloneNode(true);

        // Remove the ID to prevent duplicate IDs
        clone.removeAttribute('id');

        // Create a button element 
        var colum = document.createElement("div");
        colum.className = 'col-12 text-end';

        // Create a button element with Bootstrap classes
        var deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn float-end btn-danger delete-btn  mt-2'; // Bootstrap classes applied
        deleteButton.innerText = 'Delete';


        deleteButton.addEventListener('click', function () {
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
        document.getElementById('filesContainer3').appendChild(clone);
    }


}



// <!-- this is for add new file 4 -->
function AddNewFileFour() {
    document.getElementById('AddNewFile4').addEventListener('click', function () {
        addNewFileField4();
    });


    function addNewFileField4() {
        // Clone the existing file field container
        var clone = document.getElementById('cloneData4').cloneNode(true);

        // Remove the ID to prevent duplicate IDs
        clone.removeAttribute('id');

        // Create a button element 
        var colum = document.createElement("div");
        colum.className = 'col-12 text-end';

        // Create a button element with Bootstrap classes
        var deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn float-end btn-danger delete-btn  mt-2'; // Bootstrap classes applied
        deleteButton.innerText = 'Delete';


        deleteButton.addEventListener('click', function () {
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
        document.getElementById('filesContainer4').appendChild(clone);
    }


}


// <!-- this is for add new file 5 -->
function AddNewFileFive() {
    document.getElementById('AddNewFile5').addEventListener('click', function () {
        addNewFileField5();
    });


    function addNewFileField5() {
        // Clone the existing file field container
        var clone = document.getElementById('cloneData5').cloneNode(true);

        // Remove the ID to prevent duplicate IDs
        clone.removeAttribute('id');

        // Create a button element 
        var colum = document.createElement("div");
        colum.className = 'col-12 text-end';

        // Create a button element with Bootstrap classes
        var deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn float-end btn-danger delete-btn  mt-2'; // Bootstrap classes applied
        deleteButton.innerText = 'Delete';


        deleteButton.addEventListener('click', function () {
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
        document.getElementById('filesContainer5').appendChild(clone);
    }


}


// <!-- this is for add new file 6 -->
function AddNewFileSix() {
    document.getElementById('AddNewFile6').addEventListener('click', function () {
        addNewFileField6();
    });


    function addNewFileField6() {
        // Clone the existing file field container
        var clone = document.getElementById('cloneData6').cloneNode(true);

        // Remove the ID to prevent duplicate IDs
        clone.removeAttribute('id');

        // Create a button element 
        var colum = document.createElement("div");
        colum.className = 'col-12 text-end';

        // Create a button element with Bootstrap classes
        var deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn float-end btn-danger delete-btn  mt-2'; // Bootstrap classes applied
        deleteButton.innerText = 'Delete';


        deleteButton.addEventListener('click', function () {
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
        document.getElementById('filesContainer6').appendChild(clone);
    }


}


// <!-- this is for add new file 7 -->
function AddNewFileSeven() {
    document.getElementById('AddNewFile7').addEventListener('click', function () {
        addNewFileField7();
    });


    function addNewFileField7() {
        // Clone the existing file field container
        var clone = document.getElementById('cloneData7').cloneNode(true);

        // Remove the ID to prevent duplicate IDs
        clone.removeAttribute('id');

        // Create a button element 
        var colum = document.createElement("div");
        colum.className = 'col-12 text-end';

        // Create a button element with Bootstrap classes
        var deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn float-end btn-danger delete-btn  mt-2'; // Bootstrap classes applied
        deleteButton.innerText = 'Delete';


        deleteButton.addEventListener('click', function () {
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
        document.getElementById('filesContainer7').appendChild(clone);
    }


}


// <!-- this is for add new file 8 -->
function AddNewFileEight() {
    document.getElementById('AddNewFile8').addEventListener('click', function () {
        addNewFileField8();
    });


    function addNewFileField8() {
        // Clone the existing file field container
        var clone = document.getElementById('cloneData8').cloneNode(true);

        // Remove the ID to prevent duplicate IDs
        clone.removeAttribute('id');

        // Create a button element 
        var colum = document.createElement("div");
        colum.className = 'col-12 text-end';

        // Create a button element with Bootstrap classes
        var deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'btn float-end btn-danger delete-btn  mt-2'; // Bootstrap classes applied
        deleteButton.innerText = 'Delete';


        deleteButton.addEventListener('click', function () {
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
        document.getElementById('filesContainer8').appendChild(clone);
    }


}




addNewFileOne();
AddNewFileTwo();
AddNewFileThree();
AddNewFileFour();
AddNewFileFive()
AddNewFileSix()
AddNewFileSeven();
AddNewFileEight();
