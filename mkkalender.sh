
for i in 2017 2018
	do
       	for j in 1 2 3 4 5 6 7 8 9 10 11 12
		do
		for k in $(seq 1 31)
		do      echo -n "('"
			echo -n $i-$j-$k  

                        echo "', 'Hauswart Telli', ''),"
		done
	done
done
