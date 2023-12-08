import axios from "./base"
export const getNonograms = async (page=1, amount = 10) => {
    const respuesta = await axios.get("nonograms",{
        params:{
            page,
            amount
        }
    })
    return respuesta.data;

}
export const getNonogram = async (id) => {
    const respuesta = await axios.get("nonograms/"+id,{

    })
    //TODO: Corregir datos del backend
    return respuesta.data;
}

export const addNonogram = async (data) => {
    const respuesta = await axios.post("nonograms/",{
        ...data

    })
    return respuesta.data.data;
}

export const updateNonogram = async (id,data) => {
    const respuesta = await axios.patch("nonograms/"+id,{
        ...data

    })
    return respuesta.data.data;
}

export const deleteNonogram = async (id) => {
    const respuesta = await axios.delete("nonograms/"+id,{


    })
    return respuesta.data.data;
}
