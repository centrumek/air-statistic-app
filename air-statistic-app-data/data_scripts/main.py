import os
import pandas as pd
import re


def convert_to_csv(folder_xlsx, folder_csv):
    for file in os.listdir(folder_xlsx):
        filename = os.fsdecode(file)
        if filename.endswith('.xlsx'):
            read_file = pd.read_excel(os.path.join(folder_xlsx, filename))
            read_file.to_csv(os.path.join(folder_csv, f'{filename[:-4]}csv'))


def join_all_files_to_final(folder_csv, final_file):
    counter = 0
    for file in os.listdir(folder_csv):
        filename = os.fsdecode(file)
        if filename.endswith('.csv'):
            counter = join_to_final_file(os.path.join(folder_csv, filename), final_file, counter)


def join_to_final_file(file, final_file, counter):
    final_file = open(final_file, 'a')
    id_counter = counter
    with open(file, 'r') as source_file:
        print(file)
        for line in source_file:
            if 'Kod stanowiska' in line:
                stands = re.findall('(.+?),', line)[2:]  # Pop '0' and 'Kod stanowiska'
            if ':00' in line:
                date, data_row = re.findall(',(.*:00),(.*)', line)[0]
                for stand, value in zip(stands, data_row.split(',')):
                    if value:
                        final_file.write(f'{id_counter},{date},{stand},{value}\n')
                        id_counter += 1
    return id_counter

join_all_files_to_final(r'../raw_data/Rogal data',
                        r'../raw_data/measurements.csv')
