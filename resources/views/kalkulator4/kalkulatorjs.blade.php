<html> 
   <head> 
      <script> 
         function dis(val) 
         { 
             document.getElementById("result").value+=val 
         } 
         function solve() 
         { 
             let x = document.getElementById("result").value 
             let y = eval(x) 
             document.getElementById("result").value = y 
         } 
         function clr() 
         { 
             document.getElementById("result").value = "" 
         } 
      </script> 
      <!-- Style Kalkulator -->
      <style>
         table{

        border-radius: 2%;
        box-shadow: 0px 6px 12px #000;
         }
         tr{
        border-radius: 7%;
         }
         td{
            width: 60px;
        border-radius: 7%;
            font-family: Verdana, Geneva, Tahoma, sans-serif; 
            font-size: 20px;
            color: aliceblue;
            font-weight: bold;
         }
  
         input[type="button"] 
         { 
         height: 50px;
         background-color:rgb(61, 23, 167);
         color: white;
         font-weight: bold;
         font-size: 22px;
         width:100% 
         } 
         .title{ 
         margin-bottom: 10px;
         height: 70px; 
         text-align:center; 
       border-radius: 2%;
         background-color:rgb(23, 167, 23); 
         width: 210px; 
         color:white; 
         } 
         input[type="text"] 
         { 
         font-size: 22px;
       border-radius: 7%;
         background-color:primary; 
         height: 50px;
         width:100% 
         }
         input[type="button"].ekor{
         background-color:rgb(218, 23, 23); 
         }
         input[type="button"].kode{
         background-color:rgb(243, 170, 13); 
         }
         .back{
        width: 100%;
        background-color: #8b1717;
        color: white;
        padding: 20px 40px;
        font-size: 30px;
        font-weight: bold;
        border:none;
        border-radius: 5px;
        box-shadow: 6px 6px 6px rgba(0,0,0,0.9);
    }
         
      </style> 
   </head> 
   <body bgcolor="grey"> 
      <table align="center"  border="5" width="330px"> 
         <tr>
            <td colspan="4" class="title"> Kalkulator</td>
         </tr>
         <tr> 
            <td colspan="3"><input type="text" id="result"/></td> 
            <td><input class="ekor" type="button" value="C" onclick="clr()"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="1" onclick="dis('1')"/> </td> 
            <td><input type="button" value="2" onclick="dis('2')"/> </td> 
            <td><input type="button" value="3" onclick="dis('3')"/> </td>
            <td><input class="kode" type="button" value="+" onclick="dis('+')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="4" onclick="dis('4')"/> </td> 
            <td><input type="button" value="5" onclick="dis('5')"/> </td> 
            <td><input type="button" value="6" onclick="dis('6')"/> </td> 
            <td><input class="kode" type="button" value="-" onclick="dis('-')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="7" onclick="dis('7')"/> </td> 
            <td><input type="button" value="8" onclick="dis('8')"/> </td> 
            <td><input type="button" value="9" onclick="dis('9')"/> </td> 
            <td><input class="kode" type="button" value="/" onclick="dis('/')"/> </td>  
         </tr> 
         <tr> 
            <td><input type="button" value="." onclick="dis('.')"/> </td> 
            <td><input type="button" value="0" onclick="dis('0')"/> </td>
            <td><input class="ekor" type="button" value="=" onclick="solve()"/> </td> 
            <td><input class="kode" type="button" value="x" onclick="dis('*')"/> </td> 
         </tr> 
      </table> 
      <a href="{{route('home')}}" class="back">kembali</a>
   </body> 
</html>