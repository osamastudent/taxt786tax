// <!-- this is for files 1 -->
function filesOne() {
    var inputImages = document.getElementById("input-image");
    var fileListContainer = document.getElementById("file-list");
    var fileSummary = document.getElementById("file-summary");

    inputImages.addEventListener("change", function (event) {
        // Clear existing file names and summary
        fileListContainer.innerHTML = "";
        fileSummary.textContent = "";
        fileListContainer.style.marginTop = "10px";
        if (event.target.files.length === 0) {
            return;
        } else {
            for (var i = 0; i < event.target.files.length; i++) {
                var file = event.target.files[i];

                // Create a div to hold file information
                var fileDiv = document.createElement("div");
                fileDiv.style.marginTop = "-6px"; // Adjust the value as needed
                fileDiv.style.fontWeight = "600"; // Adjust the value as needed


                // Create span tag for file name
                var fileNameParagraph = document.createElement("span");
                fileNameParagraph.textContent = "File Name: " + file.name;
                fileDiv.appendChild(fileNameParagraph);

                // Append the file information to the container
                fileListContainer.appendChild(fileDiv);
            }

            // Update the summary message
            fileSummary.textContent = "You have selected " + event.target.files.length + " file(s).";

        }
    });

}

// <!-- this is for folder 1 -->
function folderOne() {
    var inputFolder = document.getElementById("uploadfolder");
    var folderListContainer = document.getElementById("folder-list");
    var uniqueFolders = new Set();

    inputFolder.addEventListener("change", function (event) {
        if (event.target.files.length === 0) {
            return;
        } else {
            uniqueFolders.clear();
            displayUniqueFolders(event.target.files);
        }
    });

    function displayUniqueFolders(files) {
        // Clear previous content
        folderListContainer.innerHTML = '';

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            // Extract folder name
            var folderName = file.webkitRelativePath.split("/")[0];

            // Check if the folder name is unique
            if (!uniqueFolders.has(folderName)) {
                uniqueFolders.add(folderName);

                // Create a container for the folder
                var folderContainer = document.createElement("div");
                folderContainer.classList.add("folder-container");

                // Create a div to hold folder information
                var folderDiv = document.createElement("div");
                folderDiv.classList.add("folder-name");
                folderDiv.textContent = "Folder Name: " + folderName;
                folderDiv.onclick = function () {
                    toggleFileList(this.nextElementSibling);
                };
                folderContainer.appendChild(folderDiv);

                // Create a div to hold file list
                var fileListDiv = document.createElement("div");
                fileListDiv.classList.add("file-list");

                // Display files within the folder
                displayFilesWithinFolder(folderName, files, fileListDiv);

                // Append the file list to the container
                folderContainer.appendChild(fileListDiv);

                // Append the folder container to the main container
                folderListContainer.appendChild(folderContainer);
            }
        }
    }

    function displayFilesWithinFolder(folderName, files, fileListContainer) {
        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            // Extract folder name
            var currentFolderPath = file.webkitRelativePath.split("/");
            var currentFolderName = currentFolderPath[0];

            // Check if the file is within the current folder or its subfolders
            if (currentFolderPath.length > 1 && currentFolderName === folderName) {
                // Create paragraph for file name
                var fileNameParagraph = document.createElement("p");
                fileNameParagraph.textContent = "File Name: " + currentFolderPath.slice(1).join("/");
                fileListContainer.appendChild(fileNameParagraph);
            }
        }
    }

    function toggleFileList(fileListContainer) {
        fileListContainer.style.display = (fileListContainer.style.display === 'none') ? 'block' : 'none';
    }

}


// <!-- this is for files 2 -->
function filesTwo() {
    var inputImages2 = document.getElementById("input-image2");
    var fileListContainer2 = document.getElementById("file-list2");
    var fileSummary2 = document.getElementById("file-summary2");

    inputImages2.addEventListener("change", function (event) {
        // Clear existing file names and summary
        fileListContainer2.innerHTML = "";
        fileSummary2.textContent = "";
        fileListContainer2.style.marginTop = "10px";
        if (event.target.files.length === 0) {
            return;
        } else {
            for (var i = 0; i < event.target.files.length; i++) {
                var file = event.target.files[i];

                // Create a div to hold file information
                var fileDiv2 = document.createElement("div");
                fileDiv2.style.marginTop = "-6px"; // Adjust the value as needed
                fileDiv2.style.fontWeight = "600"; // Adjust the value as needed


                // Create span tag for file name
                var fileNameParagraph2 = document.createElement("span");
                fileNameParagraph2.textContent = "File Name: " + file.name;
                fileDiv2.appendChild(fileNameParagraph2);

                // Append the file information to the container
                fileListContainer2.appendChild(fileDiv2);
            }

            // Update the summary message
            fileSummary2.textContent = "You have selected " + event.target.files.length + " file(s).";

        }
    });

}

// <!-- this is for folder 2 -->
function folderTwo() {
    var inputFolder2 = document.getElementById("uploadfolder2");
    var folderListContainer2 = document.getElementById("folder-list2");
    var uniqueFolders2 = new Set();


    inputFolder2.addEventListener("change", function (event) {
        if (event.target.files.length === 0) {
            return;
        } else {
            uniqueFolders2.clear();
            displayUniqueFolders2(event.target.files);
        }
    });

    function displayUniqueFolders2(files) {
        // Clear previous content
        folderListContainer2.innerHTML = '';

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            // Extract folder name
            var folderName2 = file.webkitRelativePath.split("/")[0];

            // Check if the folder name is unique
            if (!uniqueFolders2.has(folderName2)) {
                uniqueFolders2.add(folderName2);

                // Create a container for the folder
                var folderContainer2 = document.createElement("div");
                folderContainer2.classList.add("folder-container2");
                // Create a div to hold folder information
                var folderDiv2 = document.createElement("div");
                folderDiv2.classList.add("folder-name2");
                folderDiv2.textContent = "Folder Name: " + folderName2;
                folderDiv2.onclick = function () {
                    toggleFileList(this.nextElementSibling);
                };
                folderContainer2.appendChild(folderDiv2);

                // Create a div to hold file list
                var fileListDiv2 = document.createElement("div");
                fileListDiv2.classList.add("file-list2");
                fileListDiv2.style.paddingLeft = "10px";


                // Display files within the folder
                displayFilesWithinFolder(folderName2, files, fileListDiv2);

                // Append the file list to the container
                folderContainer2.appendChild(fileListDiv2);

                // Append the folder container to the main container
                folderListContainer2.appendChild(folderContainer2);
            }
        }
    }

    function displayFilesWithinFolder(folderName2, files, fileListContainer2) {
        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            // Extract folder name
            var currentFolderPath2 = file.webkitRelativePath.split("/");
            var currentfolderName2 = currentFolderPath2[0];

            // Check if the file is within the current folder or its subfolders
            if (currentFolderPath2.length > 1 && currentfolderName2 === folderName2) {
                // Create paragraph for file name
                var fileNameParagraph2 = document.createElement("p");
                fileNameParagraph2.textContent = "File Name 2: " + currentFolderPath2.slice(1).join("/");
                fileListContainer2.appendChild(fileNameParagraph2);
            }
        }
    }
    // shares-capital-gain
    function toggleFileList(fileListContainer2) {
        fileListContainer2.style.display = (fileListContainer2.style.display === 'none') ? 'block' : 'none';
    }

    // function updateFileSummary2() {
    //     var fileSummaryElement2 = document.getElementById("file-summary2");
    //     fileSummaryElement2.textContent = "Total Selected Files: " + totalSelectedFiles;
    // }

}


// this is for files 3
function filesThree() {
    var inputImages3 = document.getElementById("input-image3");
    var fileListContainer3 = document.getElementById("file-list3");
    var fileSummary3 = document.getElementById("file-summary3");

    inputImages3.addEventListener("change", function (event) {
        // Clear existing file names and summary
        fileListContainer3.innerHTML = "";
        fileSummary3.textContent = "";
        fileListContainer3.style.marginTop = "10px";
        if (event.target.files.length === 0) {
            return;
        } else {
            for (var i = 0; i < event.target.files.length; i++) {
                var file = event.target.files[i];

                // Create a div to hold file information
                var fileDiv3 = document.createElement("div");
                fileDiv3.style.marginTop = "-6px"; // Adjust the value as needed
                fileDiv3.style.fontWeight = "600"; // Adjust the value as needed


                // Create span tag for file name
                var fileNameParagraph3 = document.createElement("span");
                fileNameParagraph3.textContent = "File Name: " + file.name;
                fileDiv3.appendChild(fileNameParagraph3);

                // Append the file information to the container
                fileListContainer3.appendChild(fileDiv3);
            }

            // Update the summary message
            fileSummary3.textContent = "You have selected " + event.target.files.length + " file(s).";

        }
    });


}

// this is for folder3
function folderThree() {
    var inputFolder3 = document.getElementById("uploadfolder3");
    var folderListContainer3 = document.getElementById("folder-list3");
    var uniqueFolders3 = new Set();

    inputFolder3.addEventListener("change", function (event) {
        if (event.target.files.length === 0) {
            return;
        } else {
            uniqueFolders3.clear();
            displayuniqueFolders3(event.target.files);
        }
    });

    function displayuniqueFolders3(files) {
        // Clear previous content
        folderListContainer3.innerHTML = '';

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            // Extract folder name
            var folderName3 = file.webkitRelativePath.split("/")[0];

            // Check if the folder name is unique
            if (!uniqueFolders3.has(folderName3)) {
                uniqueFolders3.add(folderName3);

                // Create a container for the folder
                var folderContainer3 = document.createElement("div");
                folderContainer3.classList.add("folder-container3");

                // Create a div to hold folder information
                var folderDiv3 = document.createElement("div");
                folderDiv3.classList.add("folder-name3");
                folderDiv3.textContent = "Folder Name: " + folderName3;
                folderDiv3.onclick = function () {
                    toggleFileList3(this.nextElementSibling);
                };
                folderContainer3.appendChild(folderDiv3);

                // Create a div to hold file list
                var fileListDiv3 = document.createElement("div");
                fileListDiv3.classList.add("file-list");

                // Display files within the folder
                displayFilesWithinFolder3(folderName3, files, fileListDiv3);

                // Append the file list to the container
                folderContainer3.appendChild(fileListDiv3);

                // Append the folder container to the main container
                folderListContainer3.appendChild(folderContainer3);
            }
        }
    }

    function displayFilesWithinFolder3(folderName3, files, fileListContainer3) {
        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            // Extract folder name
            var currentFolderPath3 = file.webkitRelativePath.split("/");
            var currentfolderName3 = currentFolderPath3[0];

            // Check if the file is within the current folder or its subfolders
            if (currentFolderPath3.length > 1 && currentfolderName3 === folderName3) {
                // Create paragraph for file name
                var fileNameParagraph3 = document.createElement("p");
                fileNameParagraph3.textContent = "File Name: " + currentFolderPath3.slice(1).join("/");
                fileListContainer3.appendChild(fileNameParagraph3);
            }
        }
    }

    function toggleFileList3(fileListContainer3) {
        fileListContainer3.style.display = (fileListContainer3.style.display === 'none') ? 'block' : 'none';
    }
}

// <!-- this is for files 4 -->
function filesFour() {
    var inputImages4 = document.getElementById("input-image4");
    var fileListContainer4 = document.getElementById("file-list4");
    var fileSummary4 = document.getElementById("file-summary4");

    inputImages4.addEventListener("change", function (event) {
        // Clear existing file names and summary
        fileListContainer4.innerHTML = "";
        fileSummary4.textContent = "";
        fileListContainer4.style.marginTop = "10px";
        if (event.target.files.length === 0) {
            return;
        } else {
            for (var i = 0; i < event.target.files.length; i++) {
                var file = event.target.files[i];

                // Create a div to hold file information
                var fileDiv4 = document.createElement("div");
                fileDiv4.style.marginTop = "-6px"; // Adjust the value as needed
                fileDiv4.style.fontWeight = "600"; // Adjust the value as needed


                // Create span tag for file name
                var fileNameParagraph4 = document.createElement("span");
                fileNameParagraph4.textContent = "File Name: " + file.name;
                fileDiv4.appendChild(fileNameParagraph4);

                // Append the file information to the container
                fileListContainer4.appendChild(fileDiv4);
            }

            // Update the summary message
            fileSummary4.textContent = "You have selected " + event.target.files.length + " file(s).";

        }
    });

}
// this is for folder4
function folderFour() {
    var inputFolder4 = document.getElementById("uploadfolder4");
    var folderListContainer4 = document.getElementById("folder-list4");
    var uniqueFolders4 = new Set();

    inputFolder4.addEventListener("change", function (event) {
        if (event.target.files.length === 0) {
            return;
        } else {
            uniqueFolders4.clear();
            displayuniqueFolders4(event.target.files);
        }
    });

    function displayuniqueFolders4(files) {
        // Clear previous content
        folderListContainer4.innerHTML = '';

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            // Extract folder name
            var folderName4 = file.webkitRelativePath.split("/")[0];

            // Check if the folder name is unique
            if (!uniqueFolders4.has(folderName4)) {
                uniqueFolders4.add(folderName4);

                // Create a container for the folder
                var folderContainer4 = document.createElement("div");
                folderContainer4.classList.add("folder-container4");

                // Create a div to hold folder information
                var folderDiv4 = document.createElement("div");
                folderDiv4.classList.add("folder-name4");
                folderDiv4.textContent = "Folder Name: " + folderName4;
                folderDiv4.onclick = function () {
                    toggleFileList4(this.nextElementSibling);
                };
                folderContainer4.appendChild(folderDiv4);

                // Create a div to hold file list
                var fileListDiv4 = document.createElement("div");
                fileListDiv4.classList.add("file-list4");

                // Display files within the folder
                displayFilesWithinFolder4(folderName4, files, fileListDiv4);

                // Append the file list to the container
                folderContainer4.appendChild(fileListDiv4);

                // Append the folder container to the main container
                folderListContainer4.appendChild(folderContainer4);
            }
        }
    }

    function displayFilesWithinFolder4(folderName4, files, fileListContainer4) {
        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            // Extract folder name
            var currentFolderPath4 = file.webkitRelativePath.split("/");
            var currentfolderName4 = currentFolderPath4[0];

            // Check if the file is within the current folder or its subfolders
            if (currentFolderPath4.length > 1 && currentfolderName4 === folderName4) {
                // Create paragraph for file name
                var fileNameParagraph4 = document.createElement("p");
                fileNameParagraph4.textContent = "File Name: " + currentFolderPath4.slice(1).join("/");
                fileListContainer4.appendChild(fileNameParagraph4);
            }
        }
    }

    function toggleFileList4(fileListContainer4) {
        fileListContainer4.style.display = (fileListContainer4.style.display === 'none') ? 'block' : 'none';
    }
}


filesOne();
folderOne();

filesTwo();
folderTwo();

filesThree();
folderThree();

filesFour();
folderFour();
