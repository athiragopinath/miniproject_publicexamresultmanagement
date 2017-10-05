import os
import shutil
import random
studentid=100001
#status=['f:','s:','t:']
newpath = 'C:\Python27\OUTPUTS'
if os.path.exists(newpath):
    shutil.rmtree(newpath)
    print "ALrdy exists delted"
else:
    os.makedirs(newpath)
newpath1 = 'C:\Python27\OUTPUTS\KERALA'
district=['\ERKM','\KTYM','\TRVM']
i=0
for i in district :
    print "----disrtict%s----"%i
    folder = newpath1 + i #C:\Python27\OUTPUTS\KERALA\district
   # print "path:%s"%folder
    os.makedirs(folder)
    subdistrict=['\\001','\\002','\\003','\\004']
    j=0
    for j in subdistrict :
        print "--subdistrict%s--"%j
        folder1 = folder + j #C:\Python27\OUTPUTS\KERALA\district\subdistrict
        #print "path:%s"%folder1
        os.makedirs(folder1)
         #s='\ '
        folder1=folder1 + """\\"""
        for k in range(5):#schools
            studentid=studentid+1#
            t=`k`+'.txt'
            #print t
            filepath=folder1 + t
            print filepath
            f= open(filepath,"a")
            f.write("6215364\nxxxxxxxxxx\nxxxxxxxxxxxxx\nxxxxxxxx\n")
            f.writelines("------------------------------------------------------------------------------\n")
            for no in range(120):
                score=0
                f.write("\n%s"%studentid)
                f.write("\t%d"%random.randint(50,1000))
                studentid=studentid+5#
                studentid=studentid+1#
                studentid=studentid+3#
            print "--------------------------------------------------------"
            f.close()
#shutil.rmtree(newpath)


