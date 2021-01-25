       <div class="row">               
       <div id="drop-files" ondragover="return false">
           <!-- <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo; или &laquo;Приложение КБ.xlsx&raquo; сюда</p> -->
           <p>Перетащите файл &laquo;Заказ_ХХХХ.csv&raquo;  сюда</p>
           <!-- <form > -->
           <input type="file" id="uploadbtn" multiple  >
           <!-- </form> -->
       </div>
      
     
       
    
       <!-- <input type="button" value="Пустой бланк ВПИ" onclick="blankVPI()" /> -->

     
       
       <!-- /table-saved-files -->

       <!-- Область предпросмотра -->
       <div id="uploaded-holder"> 
           <div id="dropped-files">
               <!-- Кнопки загрузить и удалить, а также количество файлов -->
               <div id="upload-button" class="note">
                   <div class="center note">
                       <span>0 Файлов</span>
                       <a href="javascript:void(0)" class="upload note">Загрузить</a>
                       <a href="javascript:void(0)" class="delete note">Удалить</a>
                       <!-- <a href="javascript:void(0)" class="count note">Посчитать</a> -->
                       <!-- Прогресс бар загрузки -->
                       <div id="loading">
                           <div id="loading-bar">
                               <div class="loading-color"></div>
                           </div>
                           <div id="loading-content"></div>
                       </div>
                   </div>
               </div>  
           </div>
       </div>
       <!-- Список загруженных файлов -->
       <div id="file-name-holder">                      
           <div id="uploaded-files">
               <!-- <h1>Загруженные данные:</h1> -->
           </div>
       </div>

   </div> 