import os
import xml.etree.cElementTree as ET


"""def formating(s):
    length = len(s)
    # print length
    if (length == 1):
        s = "10000" + s
    elif (length == 2):
        s = "1000" + s
    elif (length == 3):
        s = "100" + s
    elif (length == 4):
        s = "10" + s
    elif (length == 5):
        s = "1" + s
    print "Rollno=%s" % s
    return s
"""

# maincode

path = "C:\Python27\OUTPUTS\KERALA"
fileset = []
# readline(str)
if os.path.exists(path):
    directories = os.listdir(path)  # district
    print directories  # ['ERKM', 'KTYM', 'TRVM']
    print "-----------------------------------------"
    for directory in directories:
        # print directory
        distpath = path + """\\""" + directory
        print distpath  # C:\Python27\OUTPUTS\KERALA\ERKM
        subdists = os.listdir(distpath)  # subdistricts
        # print subdists
        for sd in subdists:
            # print sd
            subpath = distpath + r"""\\""" + sd
            print subpath  # C:\Python27\OUTPUTS\KERALA\ERKM\001
            myfiles = os.listdir(subpath)  # files
            print myfiles
            for k in myfiles:
                k = subpath + r"""\\""" + k
                # print k
                fileset = fileset + [k]
    # print fileset
    #fname = ['C:\Python27\OUTPUTS\\score.xml']
    root = ET.Element("results")
    doc = ET.SubElement(root, "Student_list")
    for l in fileset:
        print l  # C:\Python27\OUTPUTS\KERALA\ERKM\001\0.txt
        try:
            f = open(l, 'r')
            read = f.readlines()[6:]
            splitwords = []
            print read
            for re in read:
                print "re:%s"%re
                rono,mark = re.split()
                print "rollno:%s"%rono
                #print "q:%s"%q
                print "mark:%s"%mark
                ronoint=int(rono)
                markint=int(mark)
                ET.SubElement(doc, "Rollno", name="rollno").text = `rono`
                ET.SubElement(doc, "mark", name="total_marks").text = `mark`
            print fn
            f.close()
        except:
            continue
    tree = ET.ElementTree(root)
    #print "filename%s"%fn
    tree.write('C:\Python27\OUTPUTS\\score.xml', 'utf-8')

print "done!!!"
