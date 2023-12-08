import axios from "./base"
export const getDifficulties = async (page=1, amount = 10) => {
    const respuesta = await axios.get("difficulties",{
        params:{
            page,
            amount
        }
    })
    return respuesta.data;

}
export const getDifficulty = async (id) => {
    const respuesta = await axios.get("difficulties/"+id,{

    })
    return respuesta.data.data;
}

export const addDifficulty = async (data) => {
    const respuesta = await axios.post("difficulties/",{
        ...data

    })
    return respuesta.data.data;
}

export const updateDifficulty = async (id,data) => {
    const respuesta = await axios.patch("difficulties/"+id,{
        ...data

    })
    return respuesta.data.data;
}

export const deleteDifficulty = async (id) => {
    const respuesta = await axios.delete("difficulties/"+id,{


    })
    return respuesta.data.data;
}
