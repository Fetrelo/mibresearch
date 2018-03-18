import pandas as pd

viajes = pd.read_csv("data/datos_abiertos_2017_01.csv")

# stations = viajes.iloc[:,6]
# hours = viajes.iloc[:,4]
stations = viajes.groupby(['Origin_id']).size()
hours = viajes.groupby(['Inicio_del_viaje']).size()

print(stations)
print(hours)
print(viajes.shape)