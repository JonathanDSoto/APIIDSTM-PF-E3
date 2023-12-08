import axios from "./base"
export const getTags = async (page=1, amount = 10) => {
    const respuesta = await axios.get("users",{
        params:{
            page,
            amount
        }
    })
    return respuesta.data;

}
export const getTag = async (id) => {
    const respuesta = await axios.get("users/"+id,{

    })
    return respuesta.data.data;
}

export const addTag = async (data) => {
    const respuesta = await axios.post("users/",{
        ...data

    })
    return respuesta.data.data;
}

export const updateTag = async (id,data) => {
    const respuesta = await axios.patch("users/"+id,{
        ...data

    })
    return respuesta.data.data;
}

export const deleteTag = async (id) => {
    const respuesta = await axios.delete("users/"+id,{


    })
    return respuesta.data.data;
}
