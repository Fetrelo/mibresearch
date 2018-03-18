import pandas as pd
import csv

viajes = pd.read_csv("data/datos_abiertos_2017_01.csv")

# stations = viajes.iloc[:,6]
# hours = viajes.iloc[:,4]
stations = {}
hours = {}

for index, row in viajes.iterrows():
	orid = row[6]
	try:
		stations[orid] = stations[orid] + 1
	except KeyError as e:
		stations[orid] = 1

	hour = row[4]
	time = hour.split(" ")
	h = time[1].split(":")
	hour = h[0]
	try:
		hours[hour] = hours[hour] + 1
	except Exception as e:
		hours[hour] = 1


with open('data_by_stations.csv', 'w') as csv_file:
    writer = csv.writer(csv_file)
    for key, value in stations.items():
       writer.writerow([key, value])

with open('data_by_hours.csv', 'w') as csv_file:
	writer = csv.writer(csv_file)
	for key, value in hours.items():
		writer.writerow([key, value])
print(viajes.shape)