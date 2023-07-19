
        // First Like Button
        var btnvar1 = document.getElementById("btnh1");
        var btnvar2 = document.getElementById("btnh2");
        var btnvar3 = document.getElementById("btnh3");
        var btnvar4 = document.getElementById("btnh4");
        var btnvar5 = document.getElementById("btnh5");
        var btnvar6 = document.getElementById("btnh6");
        var btnvar7 = document.getElementById("btnh7");
        var btnvar8 = document.getElementById("btnh8");
        var btnvar9 = document.getElementById("btnh9");
        var btnvar10 = document.getElementById("btnh10");
        var btnvar11 = document.getElementById("btnh11");
        var btnvar12 = document.getElementById("btnh12");
        var btnvar13 = document.getElementById("btnh13");
        var btnvar14 = document.getElementById("btnh14");
        const likeCount = document.getElementById('like-count');
        const likeCount2 = document.getElementById('like-count2');
        const likeCount3 = document.getElementById('like-count3');
        const likeCount4 = document.getElementById('like-count4');
        const likeCount5 = document.getElementById('like-count5');
        const likeCount6 = document.getElementById('like-count6');
        const likeCount7 = document.getElementById('like-count7');
        const likeCount8 = document.getElementById('like-count8');
        const likeCount9 = document.getElementById('like-count9');
        const likeCount10 = document.getElementById('like-count10');
        const likeCount11 = document.getElementById('like-count11');
        const likeCount12 = document.getElementById('like-count12');
        const likeCount13 = document.getElementById('like-count13');
        const likeCount14 = document.getElementById('like-count14');
    
        function Toggle1(){
            let count = 0;           
            count++;
            likeCount.textContent = count;
            
            if(btnvar2.style.color =="red"){
                btnvar1.style.color = "red"
                btnvar2.style.color = "grey" 
                let count = 1;           
                count--;
                likeCount2.textContent = count; 
            }
            else if(btnvar1.style.color == "red"){
                btnvar1.style.color = "grey" 
                let count = 1;           
                count--;
                likeCount.textContent = count;            
            }else{
                btnvar1.style.color = "red"
            }
        }

        function Toggle2(){
            let count = 0;           
            count++;
            likeCount2.textContent = count;

            if(btnvar1.style.color =="red"){
                btnvar2.style.color = "red"
                btnvar1.style.color = "grey"
                let count = 1;           
                count--;
                likeCount.textContent = count; 
            }else if(btnvar2.style.color == "red"){
                btnvar2.style.color = "grey"   
                let count = 1;           
                count--;
                likeCount2.textContent = count;         
            }else{
                btnvar2.style.color = "red"
            }
        }

        function Toggle3(){
            let count = 0;           
            count++;
            likeCount3.textContent = count;

            if(btnvar4.style.color =="red"){
                btnvar3.style.color = "red"
                btnvar4.style.color = "grey"
                let count = 1;           
                count--;
                likeCount4.textContent = count; 
            }else if(btnvar3.style.color == "red"){
                btnvar3.style.color = "grey"     
                let count = 1;           
                count--;
                likeCount3.textContent = count;        
            }else{
                btnvar3.style.color = "red"
            }
        }
      
        function Toggle4(){
            let count = 0;           
            count++;
            likeCount4.textContent = count;
            if(btnvar3.style.color =="red"){
                btnvar4.style.color = "red"
                btnvar3.style.color = "grey"
                let count = 1;           
                count--;
                likeCount3.textContent = count; 
            }else if(btnvar4.style.color == "red"){
                btnvar4.style.color = "grey"
                let count = 1;           
                count--;
                likeCount4.textContent = count;            
            }else{
                btnvar4.style.color = "red"
            }
        }

        function Toggle5(){
            let count = 0;           
            count++;
            likeCount5.textContent = count;
            if(btnvar6.style.color =="red"){
                btnvar5.style.color = "red"
                btnvar6.style.color = "grey"
                let count = 1;           
                count--;
                likeCount6.textContent = count;
            }else if(btnvar5.style.color == "red"){
                btnvar5.style.color = "grey" 
                let count = 1;           
                count--;
                likeCount5.textContent = count;            
            }else{
                btnvar5.style.color = "red"
            }
        }
        
        function Toggle6(){
            let count = 0;           
            count++;
            likeCount6.textContent = count;
            if(btnvar5.style.color =="red"){
                btnvar6.style.color = "red"
                btnvar5.style.color = "grey"
                let count = 1;           
                count--;
                likeCount5.textContent = count;
            }else if(btnvar6.style.color == "red"){
                btnvar6.style.color = "grey"    
                let count = 1;           
                count--;
                likeCount6.textContent = count;            
            }else{
                btnvar6.style.color = "red"
            }
        }

        function Toggle7(){
            let count = 0;           
            count++;
            likeCount7.textContent = count;
            if(btnvar8.style.color =="red"){
                btnvar7.style.color = "red"
                btnvar8.style.color = "grey"
                let count = 1;           
                count--;
                likeCount8.textContent = count;
            }else if(btnvar7.style.color == "red"){
                btnvar7.style.color = "grey"     
                let count = 1;           
                count--;
                likeCount7.textContent = count;        
            }else{
                btnvar7.style.color = "red"
            }
        }
        
        function Toggle8(){
            let count = 0;           
            count++;
            likeCount8.textContent = count;
            if(btnvar7.style.color =="red"){
                btnvar8.style.color = "red"
                btnvar7.style.color = "grey"
                let count = 1;           
                count--;
                likeCount7.textContent = count;
            }else if(btnvar8.style.color == "red"){
                btnvar8.style.color = "grey"
                let count = 1;           
                count--;
                likeCount8.textContent = count;            
            }else{
                btnvar8.style.color = "red"
            }
        }

        function Toggle9(){
            let count = 0;           
            count++;
            likeCount9.textContent = count;
            if(btnvar10.style.color =="red"){
                btnvar9.style.color = "red"
                btnvar10.style.color = "grey"
                let count = 1;           
                count--;
                likeCount10.textContent = count;
            }else if(btnvar9.style.color == "red"){
                btnvar9.style.color = "grey"   
                let count = 1;           
                count--;
                likeCount9.textContent = count;         
            }else{
                btnvar9.style.color = "red"
            }
        }
        
        function Toggle10(){
            let count = 0;           
            count++;
            likeCount10.textContent = count;
            if(btnvar9.style.color =="red"){
                btnvar10.style.color = "red"
                btnvar9.style.color = "grey"
                let count = 1;           
                count--;
                likeCount9.textContent = count;
            }else if(btnvar10.style.color == "red"){
                btnvar10.style.color = "grey" 
                let count = 1;           
                count--;
                likeCount10.textContent = count;           
            }else{
                btnvar10.style.color = "red"
            }
        }

        function Toggle11(){
            let count = 0;           
            count++;
            likeCount11.textContent = count;
            if(btnvar12.style.color =="red"){
                btnvar11.style.color = "red"
                btnvar12.style.color = "grey"
                let count = 1;           
                count--;
                likeCount12.textContent = count;
            }else if(btnvar11.style.color == "red"){
                btnvar11.style.color = "grey"   
                let count = 1;           
                count--;
                likeCount11.textContent = count;          
            }else{
                btnvar11.style.color = "red"
            }
        }
        
        function Toggle12(){
            let count = 0;           
            count++;
            likeCount12.textContent = count;
            if(btnvar11.style.color =="red"){
                btnvar12.style.color = "red"
                btnvar11.style.color = "grey"
                let count = 1;           
                count--;
                likeCount11.textContent = count;
            }else if(btnvar12.style.color == "red"){
                btnvar12.style.color = "grey"   
                let count = 1;           
                count--;
                likeCount12.textContent = count;             
            }else{
                btnvar12.style.color = "red"
            }
        }

        function Toggle13(){
            let count = 0;           
            count++;
            likeCount13.textContent = count;
            if(btnvar14.style.color =="red"){
                btnvar13.style.color = "red"
                btnvar14.style.color = "grey"
                let count = 1;           
                count--;
                likeCount14.textContent = count;
            }else if(btnvar13.style.color == "red"){
                btnvar13.style.color = "grey"    
                let count = 1;           
                count--;
                likeCount13.textContent = count;        
            }else{
                btnvar13.style.color = "red"
            }
        }
        
        function Toggle14(){
            let count = 0;           
            count++;
            likeCount14.textContent = count;
            if(btnvar13.style.color =="red"){
                btnvar14.style.color = "red"
                btnvar13.style.color = "grey"
                let count = 1;           
                count--;
                likeCount13.textContent = count;
            }else if(btnvar14.style.color == "red"){
                btnvar14.style.color = "grey"   
                let count = 1;           
                count--;
                likeCount14.textContent = count;        
            }else{
                btnvar14.style.color = "red"
            }
        }


        function tambahkanKonten() {
            var angka = document.getElementById("inputAngka").value;
            var deskripsi = document.getElementById("inputDeskripsi").value;
            var opsi = document.getElementById("inputOpsi").value;
            var opsi2 = document.getElementById("inputOpsi2").value;

            var input = document.getElementById("inputGambar");
            var reader = new FileReader();

            reader.onload = function(){
                var urlGambar = reader.result;

                var tabel = document.getElementById("tabel");
                var baris = tabel.insertRow();

                var angkaCell = baris.insertCell();
                angkaCell.textContent = angka;

                var img = document.createElement("img");
                img.src = urlGambar;
                img.alt = "Gambar Pengguna";
                var imgCell = baris.insertCell();
                imgCell.appendChild(img);

                var deskripsiCell = baris.insertCell();
                deskripsiCell.textContent = deskripsi;

                var opsiCell = baris.insertCell();
                opsiCell.textContent = opsi;

                var opsiCell2 = baris.insertCell();
                opsiCell2.textContent = opsi2;
            };

            reader.readAsDataURL(input.files[0]);
        }




