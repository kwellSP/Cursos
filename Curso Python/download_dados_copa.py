# -*- coding: utf-8 -*-
import io
import sys
import urllib.request as request

BUFF_SIZE = 1024
def download_length(response, output, length):
    time = length / BUFF_SIZE
    if length % BUFF_SIZE > 0:
        times+=1
        for time in range(times):
            output.write(response.read(BUFF_SIZE))
            print("Download %d" % (((time*BUFF_SIZE)/length)*100))
            
def download(response,output):
    total_download=0
    while true:
        data=response.read(BUFF_SIZE)
        total_download += len(data)
        if not data:
            break
        output.write(data)
        print("Dowload {bytes}".format(bytes=total_download))
def main():
    response = request.urlopen(sys.argv[1])
    out_file = io.FileIO("Saida.zip",mode="w")
    content_lenght = response.getheader("Content-Lenght")
    
    if content_lenght:
        length = int(content_lenght)
    else:
        dowload(response,out_file)
        
    response.close
    out_file.close
    
    
if __name__="__main__":
    main()
    