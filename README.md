# download-site-tool (June 12, 2018)
**<u>This project is for practicing.</u>**

You can use it to download websites' content with a website list automatically. 

There are 3 versions.

## Some Note

    1: Create with Pure Javascript. It has most of important features. 
    But bacause Cross-Origin problem, it only can use in local network.
    Following is important points:
        *1.使用let宣告xhttp跟item，這樣每一個xhttp就不會重複
        
        *2.傳送的html資料，如果有html特殊字元編碼(像是&nbsp;)，
        就要使用encodeURIComponent(data)。
    
        *3.使用DOMParse來解析從links.html傳回的string變成DOM，
        然後交給getLinks來做遍歷。
    
        4.xmlhttprequest傳送post資料時要setRequestHeader()。
    
        5.適時的在request的url後隨便加上一點query(像是?a=1)
        可以避免回傳的是緩存的結果。
    
    2: Create with Javascript jQuery. It has most of important features. 
    But bacause Cross-Origin problem, it only can use in local network.
    Following is important points:
        1.使用$.parseHTML解析從links.html回傳的字串，
        因為回傳的字串是body跟head裡的元素的集合，不好處理，
        所以先append到一個元素裡。
    
    3. Create with Javascript jQuery, php. Following is important points:  
        index.php:
            1. Get the page that contain links.
            2. Use jQuery find all the links and send to
                "getContents.php" to get link's content.
            3. Send contents to "save.php" to save content 
                as a html file.
        getContents.php:
            Receive url data in HTTP GET Method and get data
            from the url with CURL
        save.php:
            Receive filename, filetype, content data 
            in HTTP POST Method. And save file in dir "./data" 


​        

​    

​    

